package gzip

import (
	"bytes"
	"compress/gzip"
	"io"
	"net/http"
	"net/http/httptest"
	"strings"
	"testing"

	"github.com/stretchr/testify/require"
)

// body is large and repetitive so gzhttp is always past its minimum-size
// threshold and the compressed form is unambiguously smaller.
func body() string { return strings.Repeat("compress me ", 4096) }

func newPlugin(t *testing.T) *Plugin {
	t.Helper()
	p := &Plugin{}
	require.NoError(t, p.Init())
	return p
}

func echoHandler() http.Handler {
	return http.HandlerFunc(func(w http.ResponseWriter, _ *http.Request) {
		_, _ = io.WriteString(w, body())
	})
}

func TestName(t *testing.T) {
	require.Equal(t, PluginName, newPlugin(t).Name())
}

func TestInitBuildsWrapper(t *testing.T) {
	p := &Plugin{}
	require.NoError(t, p.Init())
	require.NotNil(t, p.wrapper)
	require.NotNil(t, p.prop)
}

func TestMiddlewareCompressesWhenAccepted(t *testing.T) {
	h := newPlugin(t).Middleware(echoHandler())

	req := httptest.NewRequestWithContext(t.Context(), http.MethodGet, "/", nil)
	req.Header.Set("Accept-Encoding", "gzip")
	rec := httptest.NewRecorder()

	h.ServeHTTP(rec, req)

	res := rec.Result()
	defer func() { _ = res.Body.Close() }()

	require.Equal(t, "gzip", res.Header.Get("Content-Encoding"))

	wire, err := io.ReadAll(res.Body)
	require.NoError(t, err)
	require.Less(t, len(wire), len(body()))

	zr, err := gzip.NewReader(bytes.NewReader(wire))
	require.NoError(t, err)
	defer func() { _ = zr.Close() }()

	plain, err := io.ReadAll(zr)
	require.NoError(t, err)
	require.Equal(t, body(), string(plain))
}

func TestMiddlewareLeavesBodyAloneWithoutAcceptEncoding(t *testing.T) {
	h := newPlugin(t).Middleware(echoHandler())

	req := httptest.NewRequestWithContext(t.Context(), http.MethodGet, "/", nil)
	rec := httptest.NewRecorder()

	h.ServeHTTP(rec, req)

	res := rec.Result()
	defer func() { _ = res.Body.Close() }()

	require.Empty(t, res.Header.Get("Content-Encoding"))

	got, err := io.ReadAll(res.Body)
	require.NoError(t, err)
	require.Equal(t, body(), string(got))
}

// TestMiddlewarePassesRequestThroughWithoutOtelContext covers the branch taken
// when the request carries no OtelTracerNameKey: no span is started and the
// handler still runs.
func TestMiddlewarePassesRequestThroughWithoutOtelContext(t *testing.T) {
	called := false
	h := newPlugin(t).Middleware(http.HandlerFunc(func(w http.ResponseWriter, _ *http.Request) {
		called = true
		w.WriteHeader(http.StatusTeapot)
	}))

	rec := httptest.NewRecorder()
	h.ServeHTTP(rec, httptest.NewRequestWithContext(t.Context(), http.MethodGet, "/", nil))

	require.True(t, called)
	require.Equal(t, http.StatusTeapot, rec.Result().StatusCode)
}
