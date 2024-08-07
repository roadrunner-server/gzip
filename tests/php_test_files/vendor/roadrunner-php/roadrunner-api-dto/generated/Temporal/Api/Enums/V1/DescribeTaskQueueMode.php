<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/task_queue.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.DescribeTaskQueueMode</code>
 */
class DescribeTaskQueueMode
{
    /**
     * Unspecified means legacy behavior.
     *
     * Generated from protobuf enum <code>DESCRIBE_TASK_QUEUE_MODE_UNSPECIFIED = 0;</code>
     */
    const DESCRIBE_TASK_QUEUE_MODE_UNSPECIFIED = 0;
    /**
     * Enhanced mode reports aggregated results for all partitions, supports Build IDs, and reports richer info.
     *
     * Generated from protobuf enum <code>DESCRIBE_TASK_QUEUE_MODE_ENHANCED = 1;</code>
     */
    const DESCRIBE_TASK_QUEUE_MODE_ENHANCED = 1;

    private static $valueToName = [
        self::DESCRIBE_TASK_QUEUE_MODE_UNSPECIFIED => 'DESCRIBE_TASK_QUEUE_MODE_UNSPECIFIED',
        self::DESCRIBE_TASK_QUEUE_MODE_ENHANCED => 'DESCRIBE_TASK_QUEUE_MODE_ENHANCED',
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

