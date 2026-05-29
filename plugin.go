package gzip

import (
	"net/http"

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
	prop    propagation.TextMapPropagator
	wrapper func(http.Handler) http.HandlerFunc
}

func (g *Plugin) Init() error {
	wrapper, err := gzhttp.NewWrapper(gzhttp.PreferZstd(false), gzhttp.EnableZstd(false), gzhttp.EnableGzip(true))
	if err != nil {
		return err
	}
	g.wrapper = wrapper

	g.prop = propagation.NewCompositeTextMapPropagator(propagation.TraceContext{}, propagation.Baggage{}, jprop.Jaeger{})

	return nil
}

func (g *Plugin) Middleware(next http.Handler) http.Handler {
	return g.wrapper(http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		if val, ok := r.Context().Value(rrcontext.OtelTracerNameKey).(string); ok {
			tp := trace.SpanFromContext(r.Context()).TracerProvider()
			ctx, span := tp.Tracer(val, trace.WithSchemaURL(semconv.SchemaURL),
				trace.WithInstrumentationVersion(otelhttp.Version)).
				Start(r.Context(), PluginName, trace.WithSpanKind(trace.SpanKindInternal))

			// inject
			g.prop.Inject(ctx, propagation.HeaderCarrier(r.Header))
			r = r.WithContext(ctx)
			span.End()
		}

		next.ServeHTTP(w, r)
	}))
}

func (g *Plugin) Name() string {
	return PluginName
}
