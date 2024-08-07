<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.CreateScheduleResponse</code>
 */
class CreateScheduleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     */
    protected $conflict_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conflict_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     * @return string
     */
    public function getConflictToken()
    {
        return $this->conflict_token;
    }

    /**
     * Generated from protobuf field <code>bytes conflict_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConflictToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->conflict_token = $var;

        return $this;
    }

}

