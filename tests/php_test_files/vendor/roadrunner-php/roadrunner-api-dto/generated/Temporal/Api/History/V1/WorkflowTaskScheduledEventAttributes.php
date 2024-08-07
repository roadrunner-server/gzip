<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowTaskScheduledEventAttributes</code>
 */
class WorkflowTaskScheduledEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The task queue this workflow task was enqueued in, which could be a normal or sticky queue
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     */
    protected $task_queue = null;
    /**
     * How long the worker has to process this task once receiving it before it times out
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 2;</code>
     */
    protected $start_to_close_timeout = null;
    /**
     * Starting at 1, how many attempts there have been to complete this task
     *
     * Generated from protobuf field <code>int32 attempt = 3;</code>
     */
    protected $attempt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *           The task queue this workflow task was enqueued in, which could be a normal or sticky queue
     *     @type \Google\Protobuf\Duration $start_to_close_timeout
     *           How long the worker has to process this task once receiving it before it times out
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type int $attempt
     *           Starting at 1, how many attempts there have been to complete this task
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The task queue this workflow task was enqueued in, which could be a normal or sticky queue
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    public function hasTaskQueue()
    {
        return isset($this->task_queue);
    }

    public function clearTaskQueue()
    {
        unset($this->task_queue);
    }

    /**
     * The task queue this workflow task was enqueued in, which could be a normal or sticky queue
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * How long the worker has to process this task once receiving it before it times out
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartToCloseTimeout()
    {
        return $this->start_to_close_timeout;
    }

    public function hasStartToCloseTimeout()
    {
        return isset($this->start_to_close_timeout);
    }

    public function clearStartToCloseTimeout()
    {
        unset($this->start_to_close_timeout);
    }

    /**
     * How long the worker has to process this task once receiving it before it times out
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_close_timeout = $var;

        return $this;
    }

    /**
     * Starting at 1, how many attempts there have been to complete this task
     *
     * Generated from protobuf field <code>int32 attempt = 3;</code>
     * @return int
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Starting at 1, how many attempts there have been to complete this task
     *
     * Generated from protobuf field <code>int32 attempt = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->attempt = $var;

        return $this;
    }

}

