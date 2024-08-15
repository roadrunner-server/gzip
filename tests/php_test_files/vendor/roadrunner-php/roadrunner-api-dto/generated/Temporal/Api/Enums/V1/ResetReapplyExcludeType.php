<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/reset.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Event types to exclude when reapplying events.
 *
 * Protobuf type <code>temporal.api.enums.v1.ResetReapplyExcludeType</code>
 */
class ResetReapplyExcludeType
{
    /**
     * Generated from protobuf enum <code>RESET_REAPPLY_EXCLUDE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESET_REAPPLY_EXCLUDE_TYPE_UNSPECIFIED = 0;
    /**
     * Exclude signals when reapplying events.
     *
     * Generated from protobuf enum <code>RESET_REAPPLY_EXCLUDE_TYPE_SIGNAL = 1;</code>
     */
    const RESET_REAPPLY_EXCLUDE_TYPE_SIGNAL = 1;
    /**
     * Exclude updates when reapplying events.
     *
     * Generated from protobuf enum <code>RESET_REAPPLY_EXCLUDE_TYPE_UPDATE = 2;</code>
     */
    const RESET_REAPPLY_EXCLUDE_TYPE_UPDATE = 2;

    private static $valueToName = [
        self::RESET_REAPPLY_EXCLUDE_TYPE_UNSPECIFIED => 'RESET_REAPPLY_EXCLUDE_TYPE_UNSPECIFIED',
        self::RESET_REAPPLY_EXCLUDE_TYPE_SIGNAL => 'RESET_REAPPLY_EXCLUDE_TYPE_SIGNAL',
        self::RESET_REAPPLY_EXCLUDE_TYPE_UPDATE => 'RESET_REAPPLY_EXCLUDE_TYPE_UPDATE',
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
