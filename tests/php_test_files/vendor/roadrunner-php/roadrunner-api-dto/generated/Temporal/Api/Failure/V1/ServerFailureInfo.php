<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/failure/v1/message.proto

namespace Temporal\Api\Failure\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.failure.v1.ServerFailureInfo</code>
 */
class ServerFailureInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool non_retryable = 1;</code>
     */
    protected $non_retryable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $non_retryable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool non_retryable = 1;</code>
     * @return bool
     */
    public function getNonRetryable()
    {
        return $this->non_retryable;
    }

    /**
     * Generated from protobuf field <code>bool non_retryable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setNonRetryable($var)
    {
        GPBUtil::checkBool($var);
        $this->non_retryable = $var;

        return $this;
    }

}

