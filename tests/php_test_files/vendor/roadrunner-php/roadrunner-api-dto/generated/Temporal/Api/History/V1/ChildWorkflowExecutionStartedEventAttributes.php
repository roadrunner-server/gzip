<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.ChildWorkflowExecutionStartedEventAttributes</code>
 */
class ChildWorkflowExecutionStartedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     */
    protected $namespace_id = '';
    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 2;</code>
     */
    protected $initiated_event_id = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 4;</code>
     */
    protected $workflow_type = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     */
    protected $header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace of the child workflow.
     *           SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *     @type string $namespace_id
     *     @type int|string $initiated_event_id
     *           Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type \Temporal\Api\Common\V1\Header $header
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->namespace_id;
    }

    /**
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_id = $var;

        return $this;
    }

    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 2;</code>
     * @return int|string
     */
    public function getInitiatedEventId()
    {
        return $this->initiated_event_id;
    }

    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitiatedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->initiated_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 4;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 4;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

}

