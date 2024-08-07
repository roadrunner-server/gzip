<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/failure/v1/message.proto

namespace Temporal\Api\Failure\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.failure.v1.ActivityFailureInfo</code>
 */
class ActivityFailureInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     */
    protected $scheduled_event_id = 0;
    /**
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     */
    protected $started_event_id = 0;
    /**
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 4;</code>
     */
    protected $activity_type = null;
    /**
     * Generated from protobuf field <code>string activity_id = 5;</code>
     */
    protected $activity_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 6;</code>
     */
    protected $retry_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $scheduled_event_id
     *     @type int|string $started_event_id
     *     @type string $identity
     *     @type \Temporal\Api\Common\V1\ActivityType $activity_type
     *     @type string $activity_id
     *     @type int $retry_state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 scheduled_event_id = 1;</code>
     * @return int|string
     */
    public function getScheduledEventId()
    {
        return $this->scheduled_event_id;
    }

    /**
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
     * Generated from protobuf field <code>int64 started_event_id = 2;</code>
     * @return int|string
     */
    public function getStartedEventId()
    {
        return $this->started_event_id;
    }

    /**
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
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 3;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 4;</code>
     * @return \Temporal\Api\Common\V1\ActivityType|null
     */
    public function getActivityType()
    {
        return $this->activity_type;
    }

    public function hasActivityType()
    {
        return isset($this->activity_type);
    }

    public function clearActivityType()
    {
        unset($this->activity_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 4;</code>
     * @param \Temporal\Api\Common\V1\ActivityType $var
     * @return $this
     */
    public function setActivityType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\ActivityType::class);
        $this->activity_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 5;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setActivityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 6;</code>
     * @return int
     */
    public function getRetryState()
    {
        return $this->retry_state;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.RetryState retry_state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRetryState($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\RetryState::class);
        $this->retry_state = $var;

        return $this;
    }

}

