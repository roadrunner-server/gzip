<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowTaskFailedEventAttributes</code>
 */
class WorkflowTaskFailedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the `WORKFLOW_TASK_SCHEDULED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     */
    protected $scheduled_event_id = 0;
    /**
     * The id of the `WORKFLOW_TASK_STARTED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     */
    protected $started_event_id = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowTaskFailedCause cause = 3;</code>
     */
    protected $cause = 0;
    /**
     * The failure details
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     */
    protected $failure = null;
    /**
     * If a worker explicitly failed this task, it's identity. TODO: What is this set to if server fails the task?
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     */
    protected $identity = '';
    /**
     * The original run id of the workflow. For reset workflow.
     *
     * Generated from protobuf field <code>string base_run_id = 6;</code>
     */
    protected $base_run_id = '';
    /**
     * If the workflow is being reset, the new run id.
     *
     * Generated from protobuf field <code>string new_run_id = 7;</code>
     */
    protected $new_run_id = '';
    /**
     * TODO: ?
     *
     * Generated from protobuf field <code>int64 fork_event_version = 8;</code>
     */
    protected $fork_event_version = 0;
    /**
     * DEPRECATED since 1.21 - use `worker_version` instead.
     * If a worker explicitly failed this task, its binary id
     *
     * Generated from protobuf field <code>string binary_checksum = 9;</code>
     */
    protected $binary_checksum = '';
    /**
     * Version info of the worker who processed this workflow task. If present, the `build_id` field
     * within is also used as `binary_checksum`, which may be omitted in that case (it may also be
     * populated to preserve compatibility).
     * Deprecated. Use the info inside the corresponding WorkflowTaskStartedEvent
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 10;</code>
     */
    protected $worker_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $scheduled_event_id
     *           The id of the `WORKFLOW_TASK_SCHEDULED` event this task corresponds to
     *     @type int|string $started_event_id
     *           The id of the `WORKFLOW_TASK_STARTED` event this task corresponds to
     *     @type int $cause
     *     @type \Temporal\Api\Failure\V1\Failure $failure
     *           The failure details
     *     @type string $identity
     *           If a worker explicitly failed this task, it's identity. TODO: What is this set to if server fails the task?
     *     @type string $base_run_id
     *           The original run id of the workflow. For reset workflow.
     *     @type string $new_run_id
     *           If the workflow is being reset, the new run id.
     *     @type int|string $fork_event_version
     *           TODO: ?
     *     @type string $binary_checksum
     *           DEPRECATED since 1.21 - use `worker_version` instead.
     *           If a worker explicitly failed this task, its binary id
     *     @type \Temporal\Api\Common\V1\WorkerVersionStamp $worker_version
     *           Version info of the worker who processed this workflow task. If present, the `build_id` field
     *           within is also used as `binary_checksum`, which may be omitted in that case (it may also be
     *           populated to preserve compatibility).
     *           Deprecated. Use the info inside the corresponding WorkflowTaskStartedEvent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the `WORKFLOW_TASK_SCHEDULED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     * @return int|string
     */
    public function getScheduledEventId()
    {
        return $this->scheduled_event_id;
    }

    /**
     * The id of the `WORKFLOW_TASK_SCHEDULED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setScheduledEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->scheduled_event_id = $var;

        return $this;
    }

    /**
     * The id of the `WORKFLOW_TASK_STARTED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     * @return int|string
     */
    public function getStartedEventId()
    {
        return $this->started_event_id;
    }

    /**
     * The id of the `WORKFLOW_TASK_STARTED` event this task corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowTaskFailedCause cause = 3;</code>
     * @return int
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowTaskFailedCause cause = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowTaskFailedCause::class);
        $this->cause = $var;

        return $this;
    }

    /**
     * The failure details
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     * @return \Temporal\Api\Failure\V1\Failure|null
     */
    public function getFailure()
    {
        return $this->failure;
    }

    public function hasFailure()
    {
        return isset($this->failure);
    }

    public function clearFailure()
    {
        unset($this->failure);
    }

    /**
     * The failure details
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 4;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->failure = $var;

        return $this;
    }

    /**
     * If a worker explicitly failed this task, it's identity. TODO: What is this set to if server fails the task?
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * If a worker explicitly failed this task, it's identity. TODO: What is this set to if server fails the task?
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * The original run id of the workflow. For reset workflow.
     *
     * Generated from protobuf field <code>string base_run_id = 6;</code>
     * @return string
     */
    public function getBaseRunId()
    {
        return $this->base_run_id;
    }

    /**
     * The original run id of the workflow. For reset workflow.
     *
     * Generated from protobuf field <code>string base_run_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_run_id = $var;

        return $this;
    }

    /**
     * If the workflow is being reset, the new run id.
     *
     * Generated from protobuf field <code>string new_run_id = 7;</code>
     * @return string
     */
    public function getNewRunId()
    {
        return $this->new_run_id;
    }

    /**
     * If the workflow is being reset, the new run id.
     *
     * Generated from protobuf field <code>string new_run_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNewRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_run_id = $var;

        return $this;
    }

    /**
     * TODO: ?
     *
     * Generated from protobuf field <code>int64 fork_event_version = 8;</code>
     * @return int|string
     */
    public function getForkEventVersion()
    {
        return $this->fork_event_version;
    }

    /**
     * TODO: ?
     *
     * Generated from protobuf field <code>int64 fork_event_version = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setForkEventVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->fork_event_version = $var;

        return $this;
    }

    /**
     * DEPRECATED since 1.21 - use `worker_version` instead.
     * If a worker explicitly failed this task, its binary id
     *
     * Generated from protobuf field <code>string binary_checksum = 9;</code>
     * @return string
     */
    public function getBinaryChecksum()
    {
        return $this->binary_checksum;
    }

    /**
     * DEPRECATED since 1.21 - use `worker_version` instead.
     * If a worker explicitly failed this task, its binary id
     *
     * Generated from protobuf field <code>string binary_checksum = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBinaryChecksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->binary_checksum = $var;

        return $this;
    }

    /**
     * Version info of the worker who processed this workflow task. If present, the `build_id` field
     * within is also used as `binary_checksum`, which may be omitted in that case (it may also be
     * populated to preserve compatibility).
     * Deprecated. Use the info inside the corresponding WorkflowTaskStartedEvent
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 10;</code>
     * @return \Temporal\Api\Common\V1\WorkerVersionStamp|null
     */
    public function getWorkerVersion()
    {
        return $this->worker_version;
    }

    public function hasWorkerVersion()
    {
        return isset($this->worker_version);
    }

    public function clearWorkerVersion()
    {
        unset($this->worker_version);
    }

    /**
     * Version info of the worker who processed this workflow task. If present, the `build_id` field
     * within is also used as `binary_checksum`, which may be omitted in that case (it may also be
     * populated to preserve compatibility).
     * Deprecated. Use the info inside the corresponding WorkflowTaskStartedEvent
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkerVersionStamp worker_version = 10;</code>
     * @param \Temporal\Api\Common\V1\WorkerVersionStamp $var
     * @return $this
     */
    public function setWorkerVersion($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkerVersionStamp::class);
        $this->worker_version = $var;

        return $this;
    }

}

