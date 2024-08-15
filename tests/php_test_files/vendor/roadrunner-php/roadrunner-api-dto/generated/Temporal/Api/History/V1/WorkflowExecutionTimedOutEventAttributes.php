<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionTimedOutEventAttributes</code>
 */
class WorkflowExecutionTimedOutEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 1;</code>
     */
    protected $retry_state = 0;
    /**
     * If another run is started by cron or retry, this contains the new run id.
     *
     * Generated from protobuf field <code>string new_execution_run_id = 2;</code>
     */
    protected $new_execution_run_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retry_state
     *     @type string $new_execution_run_id
     *           If another run is started by cron or retry, this contains the new run id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 1;</code>
     * @return int
     */
    public function getRetryState()
    {
        return $this->retry_state;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRetryState($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\RetryState::class);
        $this->retry_state = $var;

        return $this;
    }

    /**
     * If another run is started by cron or retry, this contains the new run id.
     *
     * Generated from protobuf field <code>string new_execution_run_id = 2;</code>
     * @return string
     */
    public function getNewExecutionRunId()
    {
        return $this->new_execution_run_id;
    }

    /**
     * If another run is started by cron or retry, this contains the new run id.
     *
     * Generated from protobuf field <code>string new_execution_run_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNewExecutionRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_execution_run_id = $var;

        return $this;
    }

}
