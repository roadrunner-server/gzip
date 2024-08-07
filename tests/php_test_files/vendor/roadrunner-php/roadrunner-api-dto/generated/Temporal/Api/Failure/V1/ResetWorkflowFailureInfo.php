<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/failure/v1/message.proto

namespace Temporal\Api\Failure\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.failure.v1.ResetWorkflowFailureInfo</code>
 */
class ResetWorkflowFailureInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 1;</code>
     */
    protected $last_heartbeat_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\Payloads $last_heartbeat_details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 1;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getLastHeartbeatDetails()
    {
        return $this->last_heartbeat_details;
    }

    public function hasLastHeartbeatDetails()
    {
        return isset($this->last_heartbeat_details);
    }

    public function clearLastHeartbeatDetails()
    {
        unset($this->last_heartbeat_details);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_heartbeat_details = 1;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setLastHeartbeatDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->last_heartbeat_details = $var;

        return $this;
    }

}

