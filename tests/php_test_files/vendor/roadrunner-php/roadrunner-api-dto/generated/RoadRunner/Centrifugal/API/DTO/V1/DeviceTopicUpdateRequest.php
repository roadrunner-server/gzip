<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceTopicUpdateRequest</code>
 */
class DeviceTopicUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string device_id = 1;</code>
     */
    protected $device_id = '';
    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 2;</code>
     */
    protected $op = '';
    /**
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     */
    private $topics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_id
     *     @type string $op
     *           add | remove | set
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string device_id = 1;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Generated from protobuf field <code>string device_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 2;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * add | remove | set
     *
     * Generated from protobuf field <code>string op = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->topics = $arr;

        return $this;
    }

}

