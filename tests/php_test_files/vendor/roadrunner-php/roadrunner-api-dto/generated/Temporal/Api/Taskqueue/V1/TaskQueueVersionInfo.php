<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.TaskQueueVersionInfo</code>
 */
class TaskQueueVersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Task Queue info per Task Type. Key is the numerical value of the temporal.api.enums.v1.TaskQueueType enum.
     *
     * Generated from protobuf field <code>map<int32, .temporal.api.taskqueue.v1.TaskQueueTypeInfo> types_info = 1;</code>
     */
    private $types_info;
    /**
     * Task Reachability is eventually consistent; there may be a delay until it converges to the most
     * accurate value but it is designed in a way to take the more conservative side until it converges.
     * For example REACHABLE is more conservative than CLOSED_WORKFLOWS_ONLY.
     * Note: future activities who inherit their workflow's Build ID but not its Task Queue will not be
     * accounted for reachability as server cannot know if they'll happen as they do not use
     * assignment rules of their Task Queue. Same goes for Child Workflows or Continue-As-New Workflows
     * who inherit the parent/previous workflow's Build ID but not its Task Queue. In those cases, make
     * sure to query reachability for the parent/previous workflow's Task Queue as well.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BuildIdTaskReachability task_reachability = 2;</code>
     */
    protected $task_reachability = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $types_info
     *           Task Queue info per Task Type. Key is the numerical value of the temporal.api.enums.v1.TaskQueueType enum.
     *     @type int $task_reachability
     *           Task Reachability is eventually consistent; there may be a delay until it converges to the most
     *           accurate value but it is designed in a way to take the more conservative side until it converges.
     *           For example REACHABLE is more conservative than CLOSED_WORKFLOWS_ONLY.
     *           Note: future activities who inherit their workflow's Build ID but not its Task Queue will not be
     *           accounted for reachability as server cannot know if they'll happen as they do not use
     *           assignment rules of their Task Queue. Same goes for Child Workflows or Continue-As-New Workflows
     *           who inherit the parent/previous workflow's Build ID but not its Task Queue. In those cases, make
     *           sure to query reachability for the parent/previous workflow's Task Queue as well.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Task Queue info per Task Type. Key is the numerical value of the temporal.api.enums.v1.TaskQueueType enum.
     *
     * Generated from protobuf field <code>map<int32, .temporal.api.taskqueue.v1.TaskQueueTypeInfo> types_info = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTypesInfo()
    {
        return $this->types_info;
    }

    /**
     * Task Queue info per Task Type. Key is the numerical value of the temporal.api.enums.v1.TaskQueueType enum.
     *
     * Generated from protobuf field <code>map<int32, .temporal.api.taskqueue.v1.TaskQueueTypeInfo> types_info = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTypesInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\TaskQueueTypeInfo::class);
        $this->types_info = $arr;

        return $this;
    }

    /**
     * Task Reachability is eventually consistent; there may be a delay until it converges to the most
     * accurate value but it is designed in a way to take the more conservative side until it converges.
     * For example REACHABLE is more conservative than CLOSED_WORKFLOWS_ONLY.
     * Note: future activities who inherit their workflow's Build ID but not its Task Queue will not be
     * accounted for reachability as server cannot know if they'll happen as they do not use
     * assignment rules of their Task Queue. Same goes for Child Workflows or Continue-As-New Workflows
     * who inherit the parent/previous workflow's Build ID but not its Task Queue. In those cases, make
     * sure to query reachability for the parent/previous workflow's Task Queue as well.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BuildIdTaskReachability task_reachability = 2;</code>
     * @return int
     */
    public function getTaskReachability()
    {
        return $this->task_reachability;
    }

    /**
     * Task Reachability is eventually consistent; there may be a delay until it converges to the most
     * accurate value but it is designed in a way to take the more conservative side until it converges.
     * For example REACHABLE is more conservative than CLOSED_WORKFLOWS_ONLY.
     * Note: future activities who inherit their workflow's Build ID but not its Task Queue will not be
     * accounted for reachability as server cannot know if they'll happen as they do not use
     * assignment rules of their Task Queue. Same goes for Child Workflows or Continue-As-New Workflows
     * who inherit the parent/previous workflow's Build ID but not its Task Queue. In those cases, make
     * sure to query reachability for the parent/previous workflow's Task Queue as well.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.BuildIdTaskReachability task_reachability = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTaskReachability($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\BuildIdTaskReachability::class);
        $this->task_reachability = $var;

        return $this;
    }

}

