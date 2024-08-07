<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/task_queue.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.TaskQueueKind</code>
 */
class TaskQueueKind
{
    /**
     * Generated from protobuf enum <code>TASK_QUEUE_KIND_UNSPECIFIED = 0;</code>
     */
    const TASK_QUEUE_KIND_UNSPECIFIED = 0;
    /**
     * Tasks from a normal workflow task queue always include complete workflow history
     * The task queue specified by the user is always a normal task queue. There can be as many
     * workers as desired for a single normal task queue. All those workers may pick up tasks from
     * that queue.
     *
     * Generated from protobuf enum <code>TASK_QUEUE_KIND_NORMAL = 1;</code>
     */
    const TASK_QUEUE_KIND_NORMAL = 1;
    /**
     * A sticky queue only includes new history since the last workflow task, and they are
     * per-worker.
     * Sticky queues are created dynamically by each worker during their start up. They only exist
     * for the lifetime of the worker process. Tasks in a sticky task queue are only available to
     * the worker that created the sticky queue.
     * Sticky queues are only for workflow tasks. There are no sticky task queues for activities.
     *
     * Generated from protobuf enum <code>TASK_QUEUE_KIND_STICKY = 2;</code>
     */
    const TASK_QUEUE_KIND_STICKY = 2;

    private static $valueToName = [
        self::TASK_QUEUE_KIND_UNSPECIFIED => 'TASK_QUEUE_KIND_UNSPECIFIED',
        self::TASK_QUEUE_KIND_NORMAL => 'TASK_QUEUE_KIND_NORMAL',
        self::TASK_QUEUE_KIND_STICKY => 'TASK_QUEUE_KIND_STICKY',
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

