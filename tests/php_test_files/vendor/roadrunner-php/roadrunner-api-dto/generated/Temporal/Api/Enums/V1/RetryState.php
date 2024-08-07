<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/workflow.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.RetryState</code>
 */
class RetryState
{
    /**
     * Generated from protobuf enum <code>RETRY_STATE_UNSPECIFIED = 0;</code>
     */
    const RETRY_STATE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_IN_PROGRESS = 1;</code>
     */
    const RETRY_STATE_IN_PROGRESS = 1;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_NON_RETRYABLE_FAILURE = 2;</code>
     */
    const RETRY_STATE_NON_RETRYABLE_FAILURE = 2;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_TIMEOUT = 3;</code>
     */
    const RETRY_STATE_TIMEOUT = 3;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_MAXIMUM_ATTEMPTS_REACHED = 4;</code>
     */
    const RETRY_STATE_MAXIMUM_ATTEMPTS_REACHED = 4;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_RETRY_POLICY_NOT_SET = 5;</code>
     */
    const RETRY_STATE_RETRY_POLICY_NOT_SET = 5;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_INTERNAL_SERVER_ERROR = 6;</code>
     */
    const RETRY_STATE_INTERNAL_SERVER_ERROR = 6;
    /**
     * Generated from protobuf enum <code>RETRY_STATE_CANCEL_REQUESTED = 7;</code>
     */
    const RETRY_STATE_CANCEL_REQUESTED = 7;

    private static $valueToName = [
        self::RETRY_STATE_UNSPECIFIED => 'RETRY_STATE_UNSPECIFIED',
        self::RETRY_STATE_IN_PROGRESS => 'RETRY_STATE_IN_PROGRESS',
        self::RETRY_STATE_NON_RETRYABLE_FAILURE => 'RETRY_STATE_NON_RETRYABLE_FAILURE',
        self::RETRY_STATE_TIMEOUT => 'RETRY_STATE_TIMEOUT',
        self::RETRY_STATE_MAXIMUM_ATTEMPTS_REACHED => 'RETRY_STATE_MAXIMUM_ATTEMPTS_REACHED',
        self::RETRY_STATE_RETRY_POLICY_NOT_SET => 'RETRY_STATE_RETRY_POLICY_NOT_SET',
        self::RETRY_STATE_INTERNAL_SERVER_ERROR => 'RETRY_STATE_INTERNAL_SERVER_ERROR',
        self::RETRY_STATE_CANCEL_REQUESTED => 'RETRY_STATE_CANCEL_REQUESTED',
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

