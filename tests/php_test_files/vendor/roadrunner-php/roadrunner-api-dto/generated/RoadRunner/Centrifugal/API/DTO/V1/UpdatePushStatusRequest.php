<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.UpdatePushStatusRequest</code>
 */
class UpdatePushStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * uid of push notification (matches SendPushNotificationResult.uid)
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     */
    protected $uid = '';
    /**
     * failed | sent | delivered | interacted
     *
     * Generated from protobuf field <code>string status = 2;</code>
     */
    protected $status = '';
    /**
     * Centrifugo device id.
     *
     * Generated from protobuf field <code>string device_id = 3;</code>
     */
    protected $device_id = '';
    /**
     * Provider issued message id.
     *
     * Generated from protobuf field <code>string msg_id = 4;</code>
     */
    protected $msg_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uid
     *           uid of push notification (matches SendPushNotificationResult.uid)
     *     @type string $status
     *           failed | sent | delivered | interacted
     *     @type string $device_id
     *           Centrifugo device id.
     *     @type string $msg_id
     *           Provider issued message id.
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * uid of push notification (matches SendPushNotificationResult.uid)
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * uid of push notification (matches SendPushNotificationResult.uid)
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * failed | sent | delivered | interacted
     *
     * Generated from protobuf field <code>string status = 2;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * failed | sent | delivered | interacted
     *
     * Generated from protobuf field <code>string status = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Centrifugo device id.
     *
     * Generated from protobuf field <code>string device_id = 3;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Centrifugo device id.
     *
     * Generated from protobuf field <code>string device_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Provider issued message id.
     *
     * Generated from protobuf field <code>string msg_id = 4;</code>
     * @return string
     */
    public function getMsgId()
    {
        return $this->msg_id;
    }

    /**
     * Provider issued message id.
     *
     * Generated from protobuf field <code>string msg_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg_id = $var;

        return $this;
    }

}

