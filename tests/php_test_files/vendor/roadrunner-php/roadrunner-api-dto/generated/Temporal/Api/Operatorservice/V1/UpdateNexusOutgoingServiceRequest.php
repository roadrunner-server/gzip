<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.UpdateNexusOutgoingServiceRequest</code>
 */
class UpdateNexusOutgoingServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace to find and update this service definition in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Service name, unique for this namespace. Must match `[a-zA-Z_][a-zA-Z0-9_]*`.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Version of the service definition to update. Must match the current version.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     */
    protected $version = 0;
    /**
     * What to update the service spec to.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.OutgoingServiceSpec spec = 4;</code>
     */
    protected $spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace to find and update this service definition in.
     *     @type string $name
     *           Service name, unique for this namespace. Must match `[a-zA-Z_][a-zA-Z0-9_]*`.
     *     @type int|string $version
     *           Version of the service definition to update. Must match the current version.
     *     @type \Temporal\Api\Nexus\V1\OutgoingServiceSpec $spec
     *           What to update the service spec to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace to find and update this service definition in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace to find and update this service definition in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Service name, unique for this namespace. Must match `[a-zA-Z_][a-zA-Z0-9_]*`.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Service name, unique for this namespace. Must match `[a-zA-Z_][a-zA-Z0-9_]*`.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Version of the service definition to update. Must match the current version.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the service definition to update. Must match the current version.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * What to update the service spec to.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.OutgoingServiceSpec spec = 4;</code>
     * @return \Temporal\Api\Nexus\V1\OutgoingServiceSpec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * What to update the service spec to.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.OutgoingServiceSpec spec = 4;</code>
     * @param \Temporal\Api\Nexus\V1\OutgoingServiceSpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Nexus\V1\OutgoingServiceSpec::class);
        $this->spec = $var;

        return $this;
    }

}

