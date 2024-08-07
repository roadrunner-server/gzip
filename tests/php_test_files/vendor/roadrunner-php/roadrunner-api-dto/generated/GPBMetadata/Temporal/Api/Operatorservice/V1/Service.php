<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/operatorservice/v1/service.proto

namespace GPBMetadata\Temporal\Api\Operatorservice\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA1\x12\x0A-temporal/api/operatorservice/v1/service.proto\x12\x1Ftemporal.api.operatorservice.v1\x1A\x1Cgoogle/api/annotations.proto2\xEF\x0F\x0A\x0FOperatorService\x12\x92\x01\x0A\x13AddSearchAttributes\x12;.temporal.api.operatorservice.v1.AddSearchAttributesRequest\x1A<.temporal.api.operatorservice.v1.AddSearchAttributesResponse\"\x00\x12\x9B\x01\x0A\x16RemoveSearchAttributes\x12>.temporal.api.operatorservice.v1.RemoveSearchAttributesRequest\x1A?.temporal.api.operatorservice.v1.RemoveSearchAttributesResponse\"\x00\x12\xCE\x01\x0A\x14ListSearchAttributes\x12<.temporal.api.operatorservice.v1.ListSearchAttributesRequest\x1A=.temporal.api.operatorservice.v1.ListSearchAttributesResponse\"9\x82\xD3\xE4\x93\x023\x121/cluster/namespaces/{namespace}/search-attributes\x12\x86\x01\x0A\x0FDeleteNamespace\x127.temporal.api.operatorservice.v1.DeleteNamespaceRequest\x1A8.temporal.api.operatorservice.v1.DeleteNamespaceResponse\"\x00\x12\xA1\x01\x0A\x18AddOrUpdateRemoteCluster\x12@.temporal.api.operatorservice.v1.AddOrUpdateRemoteClusterRequest\x1AA.temporal.api.operatorservice.v1.AddOrUpdateRemoteClusterResponse\"\x00\x12\x92\x01\x0A\x13RemoveRemoteCluster\x12;.temporal.api.operatorservice.v1.RemoveRemoteClusterRequest\x1A<.temporal.api.operatorservice.v1.RemoveRemoteClusterResponse\"\x00\x12}\x0A\x0CListClusters\x124.temporal.api.operatorservice.v1.ListClustersRequest\x1A5.temporal.api.operatorservice.v1.ListClustersResponse\"\x00\x12\xAE\x01\x0A\x10GetNexusEndpoint\x128.temporal.api.operatorservice.v1.GetNexusEndpointRequest\x1A9.temporal.api.operatorservice.v1.GetNexusEndpointResponse\"%\x82\xD3\xE4\x93\x02\x1F\x12\x1D/cluster/nexus/endpoints/{id}\x12\xB5\x01\x0A\x13CreateNexusEndpoint\x12;.temporal.api.operatorservice.v1.CreateNexusEndpointRequest\x1A<.temporal.api.operatorservice.v1.CreateNexusEndpointResponse\"#\x82\xD3\xE4\x93\x02\x1D\"\x18/cluster/nexus/endpoints:\x01*\x12\xC1\x01\x0A\x13UpdateNexusEndpoint\x12;.temporal.api.operatorservice.v1.UpdateNexusEndpointRequest\x1A<.temporal.api.operatorservice.v1.UpdateNexusEndpointResponse\"/\x82\xD3\xE4\x93\x02)\"\$/cluster/nexus/endpoints/{id}/update:\x01*\x12\xB7\x01\x0A\x13DeleteNexusEndpoint\x12;.temporal.api.operatorservice.v1.DeleteNexusEndpointRequest\x1A<.temporal.api.operatorservice.v1.DeleteNexusEndpointResponse\"%\x82\xD3\xE4\x93\x02\x1F*\x1D/cluster/nexus/endpoints/{id}\x12\xAF\x01\x0A\x12ListNexusEndpoints\x12:.temporal.api.operatorservice.v1.ListNexusEndpointsRequest\x1A;.temporal.api.operatorservice.v1.ListNexusEndpointsResponse\" \x82\xD3\xE4\x93\x02\x1A\x12\x18/cluster/nexus/endpointsB\xB6\x01\x0A\"io.temporal.api.operatorservice.v1B\x0CServiceProtoP\x01Z5go.temporal.io/api/operatorservice/v1;operatorservice\xAA\x02!Temporalio.Api.OperatorService.V1\xEA\x02\$Temporalio::Api::OperatorService::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

