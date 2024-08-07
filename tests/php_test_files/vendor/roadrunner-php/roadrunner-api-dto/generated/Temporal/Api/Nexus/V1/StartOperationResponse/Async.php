<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/nexus/v1/message.proto

namespace Temporal\Api\Nexus\V1\StartOperationResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The operation will complete asynchronously.
 * The returned ID can be used to reference this operation.
 *
 * Generated from protobuf message <code>temporal.api.nexus.v1.StartOperationResponse.Async</code>
 */
class Async extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string operation_id = 1;</code>
     */
    protected $operation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Nexus\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @return string
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    /**
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_id = $var;

        return $this;
    }

}

