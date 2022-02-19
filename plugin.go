package gzip

import (
	"net/http"

	"github.com/klauspost/compress/gzhttp"
)

const PluginName = "gzip"

type Plugin struct{}

func (g *Plugin) Init() error {
	return nil
}

func (g *Plugin) Middleware(next http.Handler) http.Handler {
	return gzhttp.GzipHandler(next)
}

func (g *Plugin) Name() string {
	return PluginName
}
