package gzip

import (
	"testing"

	"tests/helpers"

	gzipPlugin "github.com/roadrunner-server/gzip/v6"
	httpPlugin "github.com/roadrunner-server/http/v6"
	"github.com/roadrunner-server/server/v6"
	"github.com/stretchr/testify/require"
)

const middlewareNotExistAddr = "127.0.0.1:18103"

// TestUnknownMiddlewareIsReportedAndServerStillStarts boots a config listing a
// middleware that is not registered. The http plugin logs it and serves the
// remaining chain rather than failing to start.
func TestUnknownMiddlewareIsReportedAndServerStillStarts(t *testing.T) {
	rr, _ := helpers.Start(t,
		"configs/.rr-http-middlewareNotExist.yaml",
		[]any{&server.Plugin{}, &httpPlugin.Plugin{}, &gzipPlugin.Plugin{}},
		helpers.WithObservedLogger(),
		helpers.WithTCPProbe(middlewareNotExistAddr),
	)

	require.Equal(t, 1, rr.Logs.FilterMessageSnippet("http server was started").Len())
	require.Equal(t, 1, rr.Logs.FilterMessageSnippet("requested middleware does not exist").Len())
}
