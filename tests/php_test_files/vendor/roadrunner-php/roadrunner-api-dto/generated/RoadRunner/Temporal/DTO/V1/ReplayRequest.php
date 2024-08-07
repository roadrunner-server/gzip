<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/v1/temporal.proto

namespace RoadRunner\Temporal\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.v1.ReplayRequest</code>
 */
class ReplayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     */
    protected $workflow_type = null;
    /**
     * Generated from protobuf field <code>string save_path = 3;</code>
     */
    protected $save_path = '';
    /**
     * Generated from protobuf field <code>int64 last_event_id = 4;</code>
     */
    protected $last_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type string $save_path
     *     @type int|string $last_event_id
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Temporal\DTO\V1\GPBMetadata\Temporal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string save_path = 3;</code>
     * @return string
     */
    public function getSavePath()
    {
        return $this->save_path;
    }

    /**
     * Generated from protobuf field <code>string save_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSavePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->save_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_id = 4;</code>
     * @return int|string
     */
    public function getLastEventId()
    {
        return $this->last_event_id;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_event_id = $var;

        return $this;
    }

}

