package gzip

import (
	"net/http"

	"github.com/klauspost/compress/gzhttp"
	"github.com/roadrunner-server/sdk/v2/utils"
	"go.opentelemetry.io/otel/trace"
)

const (
	PluginName = "gzip"
)

type Plugin struct{}

func (g *Plugin) Init() error {
	return nil
}

func (g *Plugin) Middleware(next http.Handler) http.Handler {
	return gzhttp.GzipHandler(http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		if val, ok := r.Context().Value(utils.OtelTracerNameKey).(string); ok {
			tp := trace.SpanFromContext(r.Context()).TracerProvider()
			ctx, span := tp.Tracer(val).Start(r.Context(), PluginName)
			defer span.End()
			r = r.WithContext(ctx)
		}

		next.ServeHTTP(w, r)
	}))
}

func (g *Plugin) Name() string {
	return PluginName
}
