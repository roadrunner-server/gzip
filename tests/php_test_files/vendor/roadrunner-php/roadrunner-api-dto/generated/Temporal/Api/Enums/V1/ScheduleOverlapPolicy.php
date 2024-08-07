<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/schedule.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * ScheduleOverlapPolicy controls what happens when a workflow would be started
 * by a schedule, and is already running.
 *
 * Protobuf type <code>temporal.api.enums.v1.ScheduleOverlapPolicy</code>
 */
class ScheduleOverlapPolicy
{
    /**
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_UNSPECIFIED = 0;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_UNSPECIFIED = 0;
    /**
     * SCHEDULE_OVERLAP_POLICY_SKIP (default) means don't start anything. When the
     * workflow completes, the next scheduled event after that time will be considered.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_SKIP = 1;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_SKIP = 1;
    /**
     * SCHEDULE_OVERLAP_POLICY_BUFFER_ONE means start the workflow again soon as the
     * current one completes, but only buffer one start in this way. If another start is
     * supposed to happen when the workflow is running, and one is already buffered, then
     * only the first one will be started after the running workflow finishes.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_BUFFER_ONE = 2;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_BUFFER_ONE = 2;
    /**
     * SCHEDULE_OVERLAP_POLICY_BUFFER_ALL means buffer up any number of starts to all
     * happen sequentially, immediately after the running workflow completes.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_BUFFER_ALL = 3;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_BUFFER_ALL = 3;
    /**
     * SCHEDULE_OVERLAP_POLICY_CANCEL_OTHER means that if there is another workflow
     * running, cancel it, and start the new one after the old one completes cancellation.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_CANCEL_OTHER = 4;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_CANCEL_OTHER = 4;
    /**
     * SCHEDULE_OVERLAP_POLICY_TERMINATE_OTHER means that if there is another workflow
     * running, terminate it and start the new one immediately.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_TERMINATE_OTHER = 5;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_TERMINATE_OTHER = 5;
    /**
     * SCHEDULE_OVERLAP_POLICY_ALLOW_ALL means start any number of concurrent workflows.
     * Note that with this policy, last completion result and last failure will not be
     * available since workflows are not sequential.
     *
     * Generated from protobuf enum <code>SCHEDULE_OVERLAP_POLICY_ALLOW_ALL = 6;</code>
     */
    const SCHEDULE_OVERLAP_POLICY_ALLOW_ALL = 6;

    private static $valueToName = [
        self::SCHEDULE_OVERLAP_POLICY_UNSPECIFIED => 'SCHEDULE_OVERLAP_POLICY_UNSPECIFIED',
        self::SCHEDULE_OVERLAP_POLICY_SKIP => 'SCHEDULE_OVERLAP_POLICY_SKIP',
        self::SCHEDULE_OVERLAP_POLICY_BUFFER_ONE => 'SCHEDULE_OVERLAP_POLICY_BUFFER_ONE',
        self::SCHEDULE_OVERLAP_POLICY_BUFFER_ALL => 'SCHEDULE_OVERLAP_POLICY_BUFFER_ALL',
        self::SCHEDULE_OVERLAP_POLICY_CANCEL_OTHER => 'SCHEDULE_OVERLAP_POLICY_CANCEL_OTHER',
        self::SCHEDULE_OVERLAP_POLICY_TERMINATE_OTHER => 'SCHEDULE_OVERLAP_POLICY_TERMINATE_OTHER',
        self::SCHEDULE_OVERLAP_POLICY_ALLOW_ALL => 'SCHEDULE_OVERLAP_POLICY_ALLOW_ALL',
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

