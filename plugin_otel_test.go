package gzip

import (
	"context"
	"net/http"
	"net/http/httptest"
	"testing"

	rrcontext "github.com/roadrunner-server/context"
	"github.com/stretchr/testify/assert"
	"github.com/stretchr/testify/require"
	sdktrace "go.opentelemetry.io/otel/sdk/trace"
	"go.opentelemetry.io/otel/sdk/trace/tracetest"
	"go.opentelemetry.io/otel/trace"
)

func TestMiddlewareSpanWrapsDownstream(t *testing.T) {
	exporter := tracetest.NewInMemoryExporter()
	tp := sdktrace.NewTracerProvider(sdktrace.WithSyncer(exporter))
	t.Cleanup(func() { _ = tp.Shutdown(t.Context()) })

	p := &Plugin{}
	require.NoError(t, p.Init())

	// "next" handler that creates its own span to mark when downstream starts
	next := http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		_, span := tp.Tracer("test").Start(r.Context(), "nextHandler")
		defer span.End()
		w.WriteHeader(http.StatusOK)
	})

	handler := p.Middleware(next)

	// Create a parent span so the middleware finds a TracerProvider in context
	ctx, parentSpan := tp.Tracer("test").Start(t.Context(), "parent")
	defer parentSpan.End()

	// Set OtelTracerNameKey so the middleware activates its OTEL branch
	ctx = context.WithValue(ctx, rrcontext.OtelTracerNameKey, "test-tracer")

	req := httptest.NewRequestWithContext(ctx, http.MethodGet, "/", nil)
	rec := httptest.NewRecorder()

	handler.ServeHTTP(rec, req)

	// Flush and collect spans
	require.NoError(t, tp.ForceFlush(t.Context()))

	spans := exporter.GetSpans()

	var gzipSpan, nextSpan tracetest.SpanStub
	for _, s := range spans {
		switch s.Name {
		case PluginName:
			gzipSpan = s
		case "nextHandler":
			nextSpan = s
		}
	}

	require.NotEmpty(t, gzipSpan.Name, "gzip middleware span was not found in exported spans")
	require.NotEmpty(t, nextSpan.Name, "next handler span was not found in exported spans")

	// The gzip span must encompass the downstream span (wrapping pattern)
	assert.True(t,
		!gzipSpan.EndTime.Before(nextSpan.EndTime),
		"gzip span must end after (or at) the next handler span ends: gzip.End=%v, next.End=%v",
		gzipSpan.EndTime, nextSpan.EndTime,
	)

	// The next handler span must be a child of the gzip span
	assert.Equal(t, gzipSpan.SpanContext.SpanID(), nextSpan.Parent.SpanID(),
		"next handler span must be a child of the gzip span",
	)

	// The gzip span must use SpanKindInternal (middleware, not entry-point)
	assert.Equal(t, trace.SpanKindInternal, gzipSpan.SpanKind,
		"gzip span should be SpanKindInternal",
	)
}
