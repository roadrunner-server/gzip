<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflow/v1/message.proto

namespace Temporal\Api\Workflow\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflow.v1.PendingChildExecutionInfo</code>
 */
class PendingChildExecutionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string workflow_id = 1;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>string run_id = 2;</code>
     */
    protected $run_id = '';
    /**
     * Generated from protobuf field <code>string workflow_type_name = 3;</code>
     */
    protected $workflow_type_name = '';
    /**
     * Generated from protobuf field <code>int64 initiated_id = 4;</code>
     */
    protected $initiated_id = 0;
    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 5;</code>
     */
    protected $parent_close_policy = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $workflow_id
     *     @type string $run_id
     *     @type string $workflow_type_name
     *     @type int|string $initiated_id
     *     @type int $parent_close_policy
     *           Default: PARENT_CLOSE_POLICY_TERMINATE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 1;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 1;</code>
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
     * Generated from protobuf field <code>string run_id = 2;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->run_id;
    }

    /**
     * Generated from protobuf field <code>string run_id = 2;</code>
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
     * Generated from protobuf field <code>string workflow_type_name = 3;</code>
     * @return string
     */
    public function getWorkflowTypeName()
    {
        return $this->workflow_type_name;
    }

    /**
     * Generated from protobuf field <code>string workflow_type_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowTypeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_type_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 initiated_id = 4;</code>
     * @return int|string
     */
    public function getInitiatedId()
    {
        return $this->initiated_id;
    }

    /**
     * Generated from protobuf field <code>int64 initiated_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitiatedId($var)
    {
        GPBUtil::checkInt64($var);
        $this->initiated_id = $var;

        return $this;
    }

    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 5;</code>
     * @return int
     */
    public function getParentClosePolicy()
    {
        return $this->parent_close_policy;
    }

    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setParentClosePolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ParentClosePolicy::class);
        $this->parent_close_policy = $var;

        return $this;
    }

}

