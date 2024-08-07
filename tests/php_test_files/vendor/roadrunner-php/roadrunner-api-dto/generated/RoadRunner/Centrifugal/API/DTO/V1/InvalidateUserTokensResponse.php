<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.InvalidateUserTokensResponse</code>
 */
class InvalidateUserTokensResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     */
    protected $error = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensResult result = 2;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\Error $error
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensResult $result
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\Error|null
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
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Error error = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\Error::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensResult result = 2;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensResult|null
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
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensResult result = 2;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensResult::class);
        $this->result = $var;

        return $this;
    }

}

