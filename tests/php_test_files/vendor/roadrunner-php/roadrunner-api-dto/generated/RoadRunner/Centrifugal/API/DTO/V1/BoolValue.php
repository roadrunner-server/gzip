<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.BoolValue</code>
 */
class BoolValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     */
    protected $value = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $value
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bool value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkBool($var);
        $this->value = $var;

        return $this;
    }

}

