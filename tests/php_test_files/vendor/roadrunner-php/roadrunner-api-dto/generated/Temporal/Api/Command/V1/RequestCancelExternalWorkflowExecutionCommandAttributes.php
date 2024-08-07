<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.RequestCancelExternalWorkflowExecutionCommandAttributes</code>
 */
class RequestCancelExternalWorkflowExecutionCommandAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>string run_id = 3;</code>
     */
    protected $run_id = '';
    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string control = 4;</code>
     */
    protected $control = '';
    /**
     * Set this to true if the workflow being cancelled is a child of the workflow originating this
     * command. The request will be rejected if it is set to true and the target workflow is *not*
     * a child of the requesting workflow.
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     */
    protected $child_workflow_only = false;
    /**
     * Reason for requesting the cancellation
     *
     * Generated from protobuf field <code>string reason = 6;</code>
     */
    protected $reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type string $workflow_id
     *     @type string $run_id
     *     @type string $control
     *           Deprecated.
     *     @type bool $child_workflow_only
     *           Set this to true if the workflow being cancelled is a child of the workflow originating this
     *           command. The request will be rejected if it is set to true and the target workflow is *not*
     *           a child of the requesting workflow.
     *     @type string $reason
     *           Reason for requesting the cancellation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
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
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string run_id = 3;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->run_id;
    }

    /**
     * Generated from protobuf field <code>string run_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_id = $var;

        return $this;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string control = 4;</code>
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Deprecated.
     *
     * Generated from protobuf field <code>string control = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkString($var, True);
        $this->control = $var;

        return $this;
    }

    /**
     * Set this to true if the workflow being cancelled is a child of the workflow originating this
     * command. The request will be rejected if it is set to true and the target workflow is *not*
     * a child of the requesting workflow.
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     * @return bool
     */
    public function getChildWorkflowOnly()
    {
        return $this->child_workflow_only;
    }

    /**
     * Set this to true if the workflow being cancelled is a child of the workflow originating this
     * command. The request will be rejected if it is set to true and the target workflow is *not*
     * a child of the requesting workflow.
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setChildWorkflowOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->child_workflow_only = $var;

        return $this;
    }

    /**
     * Reason for requesting the cancellation
     *
     * Generated from protobuf field <code>string reason = 6;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason for requesting the cancellation
     *
     * Generated from protobuf field <code>string reason = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

}

