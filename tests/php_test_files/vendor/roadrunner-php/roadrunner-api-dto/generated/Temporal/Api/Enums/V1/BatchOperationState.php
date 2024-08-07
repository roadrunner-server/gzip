<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/batch_operation.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.BatchOperationState</code>
 */
class BatchOperationState
{
    /**
     * Generated from protobuf enum <code>BATCH_OPERATION_STATE_UNSPECIFIED = 0;</code>
     */
    const BATCH_OPERATION_STATE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>BATCH_OPERATION_STATE_RUNNING = 1;</code>
     */
    const BATCH_OPERATION_STATE_RUNNING = 1;
    /**
     * Generated from protobuf enum <code>BATCH_OPERATION_STATE_COMPLETED = 2;</code>
     */
    const BATCH_OPERATION_STATE_COMPLETED = 2;
    /**
     * Generated from protobuf enum <code>BATCH_OPERATION_STATE_FAILED = 3;</code>
     */
    const BATCH_OPERATION_STATE_FAILED = 3;

    private static $valueToName = [
        self::BATCH_OPERATION_STATE_UNSPECIFIED => 'BATCH_OPERATION_STATE_UNSPECIFIED',
        self::BATCH_OPERATION_STATE_RUNNING => 'BATCH_OPERATION_STATE_RUNNING',
        self::BATCH_OPERATION_STATE_COMPLETED => 'BATCH_OPERATION_STATE_COMPLETED',
        self::BATCH_OPERATION_STATE_FAILED => 'BATCH_OPERATION_STATE_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

