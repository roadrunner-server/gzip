<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceFilter</code>
 */
class DeviceFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     */
    private $ids;
    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     */
    private $users;
    /**
     * Generated from protobuf field <code>repeated string topics = 3;</code>
     */
    private $topics;
    /**
     * Generated from protobuf field <code>repeated string providers = 4;</code>
     */
    private $providers;
    /**
     * Generated from protobuf field <code>repeated string platforms = 5;</code>
     */
    private $platforms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $users
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $topics
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $providers
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $platforms
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->users = $arr;

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

    /**
     * Generated from protobuf field <code>repeated string providers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Generated from protobuf field <code>repeated string providers = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProviders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->providers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string platforms = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }

    /**
     * Generated from protobuf field <code>repeated string platforms = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->platforms = $arr;

        return $this;
    }

}

