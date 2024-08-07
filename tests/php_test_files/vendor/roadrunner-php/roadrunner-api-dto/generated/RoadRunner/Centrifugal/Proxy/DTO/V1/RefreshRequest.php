<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/proxy/v1/proxy.proto

namespace RoadRunner\Centrifugal\Proxy\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.proxy.RefreshRequest</code>
 */
class RefreshRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client = 1;</code>
     */
    protected $client = '';
    /**
     * Generated from protobuf field <code>string transport = 2;</code>
     */
    protected $transport = '';
    /**
     * Generated from protobuf field <code>string protocol = 3;</code>
     */
    protected $protocol = '';
    /**
     * Generated from protobuf field <code>string encoding = 4;</code>
     */
    protected $encoding = '';
    /**
     * Generated from protobuf field <code>string user = 10;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>bytes meta = 11;</code>
     */
    protected $meta = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client
     *     @type string $transport
     *     @type string $protocol
     *     @type string $encoding
     *     @type string $user
     *     @type string $meta
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\Proxy\DTO\V1\GPBMetadata\Proxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client = 1;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Generated from protobuf field <code>string client = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string transport = 2;</code>
     * @return string
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Generated from protobuf field <code>string transport = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransport($var)
    {
        GPBUtil::checkString($var, True);
        $this->transport = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string protocol = 3;</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Generated from protobuf field <code>string protocol = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string encoding = 4;</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Generated from protobuf field <code>string encoding = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user = 10;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>string user = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 11;</code>
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Generated from protobuf field <code>bytes meta = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMeta($var)
    {
        GPBUtil::checkString($var, False);
        $this->meta = $var;

        return $this;
    }

}

