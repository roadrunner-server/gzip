<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.ListNexusEndpointsResponse</code>
 */
class ListNexusEndpointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Token for getting the next page.
     *
     * Generated from protobuf field <code>bytes next_page_token = 1;</code>
     */
    protected $next_page_token = '';
    /**
     * Generated from protobuf field <code>repeated .temporal.api.nexus.v1.Endpoint endpoints = 2;</code>
     */
    private $endpoints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $next_page_token
     *           Token for getting the next page.
     *     @type array<\Temporal\Api\Nexus\V1\Endpoint>|\Google\Protobuf\Internal\RepeatedField $endpoints
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Token for getting the next page.
     *
     * Generated from protobuf field <code>bytes next_page_token = 1;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token for getting the next page.
     *
     * Generated from protobuf field <code>bytes next_page_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.nexus.v1.Endpoint endpoints = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.nexus.v1.Endpoint endpoints = 2;</code>
     * @param array<\Temporal\Api\Nexus\V1\Endpoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Nexus\V1\Endpoint::class);
        $this->endpoints = $arr;

        return $this;
    }

}

