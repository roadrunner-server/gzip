<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ListNamespacesResponse</code>
 */
class ListNamespacesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.DescribeNamespaceResponse namespaces = 1;</code>
     */
    private $namespaces;
    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Workflowservice\V1\DescribeNamespaceResponse>|\Google\Protobuf\Internal\RepeatedField $namespaces
     *     @type string $next_page_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.DescribeNamespaceResponse namespaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.DescribeNamespaceResponse namespaces = 1;</code>
     * @param array<\Temporal\Api\Workflowservice\V1\DescribeNamespaceResponse>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Workflowservice\V1\DescribeNamespaceResponse::class);
        $this->namespaces = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

}

