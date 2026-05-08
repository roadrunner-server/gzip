package gzip

import (
	"context"
	"net/http"
	"sync"

	"github.com/klauspost/compress/gzhttp"
	rrcontext "github.com/roadrunner-server/context"
	"go.opentelemetry.io/contrib/instrumentation/net/http/otelhttp"
	jprop "go.opentelemetry.io/contrib/propagators/jaeger"
	"go.opentelemetry.io/otel/propagation"
	semconv "go.opentelemetry.io/otel/semconv/v1.20.0"
	"go.opentelemetry.io/otel/trace"
)

const (
	PluginName = "gzip"
)

type Plugin struct {
	prop propagation.TextMapPropagator
}

var onceDefault sync.Once                              //nolint:gochecknoglobals
var defaultWrapper func(http.Handler) http.HandlerFunc //nolint:gochecknoglobals

// GzipHandler allows to easily wrap an http handler with default settings.
func gzipHandler(h http.Handler) http.HandlerFunc {
	onceDefault.Do(func() {
		var err error
		defaultWrapper, err = gzhttp.NewWrapper(gzhttp.PreferZstd(false), gzhttp.EnableZstd(false), gzhttp.EnableGzip(true))
		if err != nil {
			panic(err)
		}
	})

	return defaultWrapper(h)
}

func (g *Plugin) Init() error {
	g.prop = propagation.NewCompositeTextMapPropagator(propagation.TraceContext{}, propagation.Baggage{}, jprop.Jaeger{})

	return nil
}

func (g *Plugin) Middleware(next http.Handler) http.Handler {
	return gzipHandler(http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		var span trace.Span

		if val, ok := r.Context().Value(rrcontext.OtelTracerNameKey).(string); ok {
			tp := trace.SpanFromContext(r.Context()).TracerProvider()
			var ctx context.Context
			ctx, span = tp.Tracer(val, trace.WithSchemaURL(semconv.SchemaURL),
				trace.WithInstrumentationVersion(otelhttp.Version)).
				Start(r.Context(), PluginName, trace.WithSpanKind(trace.SpanKindInternal))

			// inject
			g.prop.Inject(ctx, propagation.HeaderCarrier(r.Header))
			r = r.WithContext(ctx)
		}

		if span != nil {
			span.End()
		}

		next.ServeHTTP(w, r)
	}))
}

func (g *Plugin) Name() string {
	return PluginName
}
