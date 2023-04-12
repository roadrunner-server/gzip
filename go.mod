module github.com/roadrunner-server/gzip/v4

go 1.20

require (
	github.com/klauspost/compress v1.16.4
	github.com/roadrunner-server/sdk/v4 v4.2.1
	go.opentelemetry.io/contrib/instrumentation/net/http/otelhttp v0.40.0
	go.opentelemetry.io/contrib/propagators/jaeger v1.15.0
	go.opentelemetry.io/otel v1.14.0
	go.opentelemetry.io/otel/trace v1.14.0
)

require (
	github.com/felixge/httpsnoop v1.0.3 // indirect
	github.com/go-logr/logr v1.2.4 // indirect
	github.com/go-logr/stdr v1.2.2 // indirect
	github.com/roadrunner-server/errors v1.2.0 // indirect
	github.com/roadrunner-server/tcplisten v1.3.0 // indirect
	go.opentelemetry.io/otel/metric v0.37.0 // indirect
)
