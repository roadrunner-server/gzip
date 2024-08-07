<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.AddSearchAttributesRequest</code>
 */
class AddSearchAttributesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Mapping between search attribute name and its IndexedValueType.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.enums.v1.IndexedValueType> search_attributes = 1;</code>
     */
    private $search_attributes;
    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     */
    protected $namespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $search_attributes
     *           Mapping between search attribute name and its IndexedValueType.
     *     @type string $namespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Mapping between search attribute name and its IndexedValueType.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.enums.v1.IndexedValueType> search_attributes = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    /**
     * Mapping between search attribute name and its IndexedValueType.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.enums.v1.IndexedValueType> search_attributes = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Temporal\Api\Enums\V1\IndexedValueType::class);
        $this->search_attributes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

}

