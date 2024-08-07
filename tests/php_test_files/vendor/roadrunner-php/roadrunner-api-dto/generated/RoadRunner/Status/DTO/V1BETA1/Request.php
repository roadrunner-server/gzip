<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: status/v1beta1/status.proto

namespace RoadRunner\Status\DTO\V1BETA1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>status.v1beta1.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string plugin = 1;</code>
     */
    protected $plugin = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plugin
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Status\DTO\V1BETA1\GPBMetadata\Status::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string plugin = 1;</code>
     * @return string
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     * Generated from protobuf field <code>string plugin = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlugin($var)
    {
        GPBUtil::checkString($var, True);
        $this->plugin = $var;

        return $this;
    }

}

