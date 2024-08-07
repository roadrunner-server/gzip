<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StructuredCalendarSpec describes an event specification relative to the
 * calendar, in a form that's easy to work with programmatically. Each field can
 * be one or more ranges.
 * A timestamp matches if at least one range of each field matches the
 * corresponding fields of the timestamp, except for year: if year is missing,
 * that means all years match. For all fields besides year, at least one Range
 * must be present to match anything.
 * TODO: add relative-to-end-of-month
 * TODO: add nth day-of-week in month
 *
 * Generated from protobuf message <code>temporal.api.schedule.v1.StructuredCalendarSpec</code>
 */
class StructuredCalendarSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Match seconds (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range second = 1;</code>
     */
    private $second;
    /**
     * Match minutes (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range minute = 2;</code>
     */
    private $minute;
    /**
     * Match hours (0-23)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range hour = 3;</code>
     */
    private $hour;
    /**
     * Match days of the month (1-31)
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_month = 4;</code>
     */
    private $day_of_month;
    /**
     * Match months (1-12)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range month = 5;</code>
     */
    private $month;
    /**
     * Match years.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range year = 6;</code>
     */
    private $year;
    /**
     * Match days of the week (0-6; 0 is Sunday).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_week = 7;</code>
     */
    private $day_of_week;
    /**
     * Free-form comment describing the intention of this spec.
     *
     * Generated from protobuf field <code>string comment = 8;</code>
     */
    protected $comment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $second
     *           Match seconds (0-59)
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $minute
     *           Match minutes (0-59)
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $hour
     *           Match hours (0-23)
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $day_of_month
     *           Match days of the month (1-31)
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: standard name of field --)
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $month
     *           Match months (1-12)
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $year
     *           Match years.
     *     @type array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $day_of_week
     *           Match days of the week (0-6; 0 is Sunday).
     *     @type string $comment
     *           Free-form comment describing the intention of this spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Match seconds (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range second = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Match seconds (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range second = 1;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecond($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->second = $arr;

        return $this;
    }

    /**
     * Match minutes (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range minute = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Match minutes (0-59)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range minute = 2;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMinute($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->minute = $arr;

        return $this;
    }

    /**
     * Match hours (0-23)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range hour = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Match hours (0-23)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range hour = 3;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHour($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->hour = $arr;

        return $this;
    }

    /**
     * Match days of the month (1-31)
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_month = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDayOfMonth()
    {
        return $this->day_of_month;
    }

    /**
     * Match days of the month (1-31)
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_month = 4;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDayOfMonth($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->day_of_month = $arr;

        return $this;
    }

    /**
     * Match months (1-12)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range month = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Match months (1-12)
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range month = 5;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonth($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->month = $arr;

        return $this;
    }

    /**
     * Match years.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range year = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Match years.
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range year = 6;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYear($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->year = $arr;

        return $this;
    }

    /**
     * Match days of the week (0-6; 0 is Sunday).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_week = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * Match days of the week (0-6; 0 is Sunday).
     *
     * Generated from protobuf field <code>repeated .temporal.api.schedule.v1.Range day_of_week = 7;</code>
     * @param array<\Temporal\Api\Schedule\V1\Range>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Schedule\V1\Range::class);
        $this->day_of_week = $arr;

        return $this;
    }

    /**
     * Free-form comment describing the intention of this spec.
     *
     * Generated from protobuf field <code>string comment = 8;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Free-form comment describing the intention of this spec.
     *
     * Generated from protobuf field <code>string comment = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

}

