<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\UpdateWorkerBuildIdCompatibilityRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkerBuildIdCompatibilityRequest.AddNewCompatibleVersion</code>
 */
class AddNewCompatibleVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * A new id to be added to an existing compatible set.
     *
     * Generated from protobuf field <code>string new_build_id = 1;</code>
     */
    protected $new_build_id = '';
    /**
     * A build id which must already exist in the version sets known by the task queue. The new
     * id will be stored in the set containing this id, marking it as compatible with
     * the versions within.
     *
     * Generated from protobuf field <code>string existing_compatible_build_id = 2;</code>
     */
    protected $existing_compatible_build_id = '';
    /**
     * When set, establishes the compatible set being targeted as the overall default for the
     * queue. If a different set was the current default, the targeted set will replace it as
     * the new default.
     *
     * Generated from protobuf field <code>bool make_set_default = 3;</code>
     */
    protected $make_set_default = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $new_build_id
     *           A new id to be added to an existing compatible set.
     *     @type string $existing_compatible_build_id
     *           A build id which must already exist in the version sets known by the task queue. The new
     *           id will be stored in the set containing this id, marking it as compatible with
     *           the versions within.
     *     @type bool $make_set_default
     *           When set, establishes the compatible set being targeted as the overall default for the
     *           queue. If a different set was the current default, the targeted set will replace it as
     *           the new default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * A new id to be added to an existing compatible set.
     *
     * Generated from protobuf field <code>string new_build_id = 1;</code>
     * @return string
     */
    public function getNewBuildId()
    {
        return $this->new_build_id;
    }

    /**
     * A new id to be added to an existing compatible set.
     *
     * Generated from protobuf field <code>string new_build_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_build_id = $var;

        return $this;
    }

    /**
     * A build id which must already exist in the version sets known by the task queue. The new
     * id will be stored in the set containing this id, marking it as compatible with
     * the versions within.
     *
     * Generated from protobuf field <code>string existing_compatible_build_id = 2;</code>
     * @return string
     */
    public function getExistingCompatibleBuildId()
    {
        return $this->existing_compatible_build_id;
    }

    /**
     * A build id which must already exist in the version sets known by the task queue. The new
     * id will be stored in the set containing this id, marking it as compatible with
     * the versions within.
     *
     * Generated from protobuf field <code>string existing_compatible_build_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExistingCompatibleBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->existing_compatible_build_id = $var;

        return $this;
    }

    /**
     * When set, establishes the compatible set being targeted as the overall default for the
     * queue. If a different set was the current default, the targeted set will replace it as
     * the new default.
     *
     * Generated from protobuf field <code>bool make_set_default = 3;</code>
     * @return bool
     */
    public function getMakeSetDefault()
    {
        return $this->make_set_default;
    }

    /**
     * When set, establishes the compatible set being targeted as the overall default for the
     * queue. If a different set was the current default, the targeted set will replace it as
     * the new default.
     *
     * Generated from protobuf field <code>bool make_set_default = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setMakeSetDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->make_set_default = $var;

        return $this;
    }

}

