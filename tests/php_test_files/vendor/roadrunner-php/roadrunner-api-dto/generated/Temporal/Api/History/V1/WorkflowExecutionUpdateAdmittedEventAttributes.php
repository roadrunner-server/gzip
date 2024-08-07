<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionUpdateAdmittedEventAttributes</code>
 */
class WorkflowExecutionUpdateAdmittedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The update request associated with this event.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * An explanation of why this event was written to history.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.UpdateAdmittedEventOrigin origin = 2;</code>
     */
    protected $origin = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Update\V1\Request $request
     *           The update request associated with this event.
     *     @type int $origin
     *           An explanation of why this event was written to history.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The update request associated with this event.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 1;</code>
     * @return \Temporal\Api\Update\V1\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * The update request associated with this event.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request request = 1;</code>
     * @param \Temporal\Api\Update\V1\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * An explanation of why this event was written to history.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.UpdateAdmittedEventOrigin origin = 2;</code>
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * An explanation of why this event was written to history.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.UpdateAdmittedEventOrigin origin = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\UpdateAdmittedEventOrigin::class);
        $this->origin = $var;

        return $this;
    }

}

