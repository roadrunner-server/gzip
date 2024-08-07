<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.CreateNexusIncomingServiceRequest</code>
 */
class CreateNexusIncomingServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Service definition to create.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.IncomingServiceSpec spec = 1;</code>
     */
    protected $spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Nexus\V1\IncomingServiceSpec $spec
     *           Service definition to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Service definition to create.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.IncomingServiceSpec spec = 1;</code>
     * @return \Temporal\Api\Nexus\V1\IncomingServiceSpec|null
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
     * Service definition to create.
     *
     * Generated from protobuf field <code>.temporal.api.nexus.v1.IncomingServiceSpec spec = 1;</code>
     * @param \Temporal\Api\Nexus\V1\IncomingServiceSpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Nexus\V1\IncomingServiceSpec::class);
        $this->spec = $var;

        return $this;
    }

}

