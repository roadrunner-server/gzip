<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/sdk/v1/task_complete_metadata.proto

namespace GPBMetadata\Temporal\Api\Sdk\V1;

class TaskCompleteMetadata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xD3\x02\x0A0temporal/api/sdk/v1/task_complete_metadata.proto\x12\x13temporal.api.sdk.v1\"x\x0A\x1DWorkflowTaskCompletedMetadata\x12\x17\x0A\x0Fcore_used_flags\x18\x01 \x03(\x0D\x12\x17\x0A\x0Flang_used_flags\x18\x02 \x03(\x0D\x12\x10\x0A\x08sdk_name\x18\x03 \x01(\x09\x12\x13\x0A\x0Bsdk_version\x18\x04 \x01(\x09B\x87\x01\x0A\x16io.temporal.api.sdk.v1B\x19TaskCompleteMetadataProtoP\x01Z\x1Dgo.temporal.io/api/sdk/v1;sdk\xAA\x02\x15Temporalio.Api.Sdk.V1\xEA\x02\x18Temporalio::Api::Sdk::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

