package gzip

import (
	"bytes"
	"compress/gzip"
	"io"
	"net/http"
	"testing"

	"tests/helpers"

	gzipPlugin "github.com/roadrunner-server/gzip/v6"
	httpPlugin "github.com/roadrunner-server/http/v6"
	"github.com/roadrunner-server/server/v6"
	"github.com/stretchr/testify/require"
)

const (
	gzipAddr = "127.0.0.1:18953"
	gzipURL  = "http://" + gzipAddr

	// workerBodySize is what psr-worker.php writes on every request.
	workerBodySize = 1024 * 1024 * 5
)

func gzipPlugins() []any {
	return []any{&server.Plugin{}, &httpPlugin.Plugin{}, &gzipPlugin.Plugin{}}
}

// TestCompressesWhenClientAccepts drives a real request through the pool and
// checks the response arrived gzipped and still decodes to the payload the
// worker wrote.
func TestCompressesWhenClientAccepts(t *testing.T) {
	helpers.Start(t, "configs/.rr-http-withGzip.yaml", gzipPlugins(), helpers.WithTCPProbe(gzipAddr))

	// DisableCompression false lets the transport add Accept-Encoding and
	// transparently decode, which is what sets Uncompressed.
	client := &http.Client{Transport: &http.Transport{DisableCompression: false}}

	req, err := http.NewRequestWithContext(t.Context(), http.MethodGet, gzipURL, nil)
	require.NoError(t, err)

	resp, err := client.Do(req)
	require.NoError(t, err)
	defer func() { _ = resp.Body.Close() }()

	require.Equal(t, http.StatusOK, resp.StatusCode)
	require.True(t, resp.Uncompressed, "response was not gzipped")

	body, err := io.ReadAll(resp.Body)
	require.NoError(t, err)
	require.Len(t, body, workerBodySize)
}

// TestCompressedPayloadIsSmallerThanOrigin decodes the gzip stream by hand so
// the test observes the wire bytes rather than trusting the transport, and
// proves the middleware actually shrank the body.
func TestCompressedPayloadIsSmallerThanOrigin(t *testing.T) {
	helpers.Start(t, "configs/.rr-http-withGzip.yaml", gzipPlugins(), helpers.WithTCPProbe(gzipAddr))

	// DisableCompression true keeps the transport from decoding, so the
	// Content-Encoding header and the raw stream stay visible.
	client := &http.Client{Transport: &http.Transport{DisableCompression: true}}

	req, err := http.NewRequestWithContext(t.Context(), http.MethodGet, gzipURL, nil)
	require.NoError(t, err)
	req.Header.Set("Accept-Encoding", "gzip")

	resp, err := client.Do(req)
	require.NoError(t, err)
	defer func() { _ = resp.Body.Close() }()

	require.Equal(t, "gzip", resp.Header.Get("Content-Encoding"))

	wire, err := io.ReadAll(resp.Body)
	require.NoError(t, err)
	require.Less(t, len(wire), workerBodySize, "gzip did not shrink the body")

	zr, err := gzip.NewReader(bytes.NewReader(wire))
	require.NoError(t, err)
	defer func() { _ = zr.Close() }()

	plain, err := io.ReadAll(zr)
	require.NoError(t, err)
	require.Len(t, plain, workerBodySize)
}

// TestSkipsCompressionWhenClientDoesNot asks for identity encoding and expects
// the body to come back untouched.
func TestSkipsCompressionWhenClientDoesNot(t *testing.T) {
	helpers.Start(t, "configs/.rr-http-withGzip.yaml", gzipPlugins(), helpers.WithTCPProbe(gzipAddr))

	client := &http.Client{Transport: &http.Transport{DisableCompression: true}}

	req, err := http.NewRequestWithContext(t.Context(), http.MethodGet, gzipURL, nil)
	require.NoError(t, err)
	req.Header.Set("Accept-Encoding", "identity")

	resp, err := client.Do(req)
	require.NoError(t, err)
	defer func() { _ = resp.Body.Close() }()

	require.Empty(t, resp.Header.Get("Content-Encoding"))

	body, err := io.ReadAll(resp.Body)
	require.NoError(t, err)
	require.Len(t, body, workerBodySize)
}
