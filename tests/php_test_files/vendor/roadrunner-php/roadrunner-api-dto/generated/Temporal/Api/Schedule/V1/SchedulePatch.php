<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.schedule.v1.SchedulePatch</code>
 */
class SchedulePatch extends \Google\Protobuf\Internal\Message
{
    /**
     * If set, trigger one action immediately.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.TriggerImmediatelyRequest trigger_immediately = 1;</code>
     */
    protected $trigger_immediately = null;
    /**
     * If set, runs though the specified time period(s) and takes actions as if that time
     * passed by right now, all at once. The overlap policy can be overridden for the
     * scope of the backfill.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.BackfillRequest backfill_request = 2;</code>
     */
    private $backfill_request;
    /**
     * If set, change the state to paused or unpaused (respectively) and set the
     * notes field to the value of the string.
     *
     * Generated from protobuf field <code>string pause = 3;</code>
     */
    protected $pause = '';
    /**
     * Generated from protobuf field <code>string unpause = 4;</code>
     */
    protected $unpause = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Schedule\V1\TriggerImmediatelyRequest $trigger_immediately
     *           If set, trigger one action immediately.
     *     @type array<\Temporal\Api\Schedule\V1\BackfillRequest>|\Google\Protobuf\Internal\RepeatedField $backfill_request
     *           If set, runs though the specified time period(s) and takes actions as if that time
     *           passed by right now, all at once. The overlap policy can be overridden for the
     *           scope of the backfill.
     *     @type string $pause
     *           If set, change the state to paused or unpaused (respectively) and set the
     *           notes field to the value of the string.
     *     @type string $unpause
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * If set, trigger one action immediately.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.TriggerImmediatelyRequest trigger_immediately = 1;</code>
     * @return \Temporal\Api\Schedule\V1\TriggerImmediatelyRequest|null
     */
    public function getTriggerImmediately()
    {
        return $this->trigger_immediately;
    }

    public function hasTriggerImmediately()
    {
        return isset($this->trigger_immediately);
    }

    public function clearTriggerImmediately()
    {
        unset($this->trigger_immediately);
    }

    /**
     * If set, trigger one action immediately.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.TriggerImmediatelyRequest trigger_immediately = 1;</code>
     * @param \Temporal\Api\Schedule\V1\TriggerImmediatelyRequest $var
     * @return $this
     */
    public function setTriggerImmediately($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\TriggerImmediatelyRequest::class);
        $this->trigger_immediately = $var;

        return $this;
    }

    /**
     * If set, runs though the specified time period(s) and takes actions as if that time
     * passed by right now, all at once. The overlap policy can be overridden for the
     * scope of the backfill.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.BackfillRequest backfill_request = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackfillRequest()
    {
        return $this->backfill_request;
    }

    /**
     * If set, runs though the specified time period(s) and takes actions as if that time
     * passed by right now, all at once. The overlap policy can be overridden for the
     * scope of the backfill.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.BackfillRequest backfill_request = 2;</code>
     * @param array<\Temporal\Api\Schedule\V1\BackfillRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackfillRequest($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\BackfillRequest::class);
        $this->backfill_request = $arr;

        return $this;
    }

    /**
     * If set, change the state to paused or unpaused (respectively) and set the
     * notes field to the value of the string.
     *
     * Generated from protobuf field <code>string pause = 3;</code>
     * @return string
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * If set, change the state to paused or unpaused (respectively) and set the
     * notes field to the value of the string.
     *
     * Generated from protobuf field <code>string pause = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPause($var)
    {
        GPBUtil::checkString($var, True);
        $this->pause = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string unpause = 4;</code>
     * @return string
     */
    public function getUnpause()
    {
        return $this->unpause;
    }

    /**
     * Generated from protobuf field <code>string unpause = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUnpause($var)
    {
        GPBUtil::checkString($var, True);
        $this->unpause = $var;

        return $this;
    }

}

