<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/failed_cause.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.ResourceExhaustedScope</code>
 */
class ResourceExhaustedScope
{
    /**
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_SCOPE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_EXHAUSTED_SCOPE_UNSPECIFIED = 0;
    /**
     * Exhausted resource is a system-level resource.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_SCOPE_NAMESPACE = 1;</code>
     */
    const RESOURCE_EXHAUSTED_SCOPE_NAMESPACE = 1;
    /**
     * Exhausted resource is a namespace-level resource.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_SCOPE_SYSTEM = 2;</code>
     */
    const RESOURCE_EXHAUSTED_SCOPE_SYSTEM = 2;

    private static $valueToName = [
        self::RESOURCE_EXHAUSTED_SCOPE_UNSPECIFIED => 'RESOURCE_EXHAUSTED_SCOPE_UNSPECIFIED',
        self::RESOURCE_EXHAUSTED_SCOPE_NAMESPACE => 'RESOURCE_EXHAUSTED_SCOPE_NAMESPACE',
        self::RESOURCE_EXHAUSTED_SCOPE_SYSTEM => 'RESOURCE_EXHAUSTED_SCOPE_SYSTEM',
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

