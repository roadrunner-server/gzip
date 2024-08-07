<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DeleteScheduleRequest</code>
 */
class DeleteScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The namespace of the schedule to delete.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * The id of the schedule to delete.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     */
    protected $schedule_id = '';
    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           The namespace of the schedule to delete.
     *     @type string $schedule_id
     *           The id of the schedule to delete.
     *     @type string $identity
     *           The identity of the client who initiated this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The namespace of the schedule to delete.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * The namespace of the schedule to delete.
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
     * The id of the schedule to delete.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     * @return string
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

    /**
     * The id of the schedule to delete.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScheduleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule_id = $var;

        return $this;
    }

    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

}

