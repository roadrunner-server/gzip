<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.proxy.RefreshResponse</code>
 */
class RefreshResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.RefreshResult result = 1;</code>
     */
    protected $result = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     */
    protected $disconnect = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\RefreshResult $result
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\Error $error
     *     @type \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect $disconnect
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.RefreshResult result = 1;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\RefreshResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.RefreshResult result = 1;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\RefreshResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\RefreshResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Error error = 2;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     * @return \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect|null
     */
    public function getDisconnect()
    {
        return $this->disconnect;
    }

    public function hasDisconnect()
    {
        return isset($this->disconnect);
    }

    public function clearDisconnect()
    {
        unset($this->disconnect);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.proxy.Disconnect disconnect = 3;</code>
     * @param \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect $var
     * @return $this
     */
    public function setDisconnect($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\Proxy\DTO\V1\Disconnect::class);
        $this->disconnect = $var;

        return $this;
    }

}

