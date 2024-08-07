<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: jobs/v1/jobs.proto

namespace RoadRunner\Jobs\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * batch jobs request (jobs.PushBatch RPC endpoint) -> PushBatch(j *jobsProto.PushBatchRequest, _ *jobsProto.Empty)
 * response `message Empty`
 *
 * Generated from protobuf message <code>jobs.v1.PushBatchRequest</code>
 */
class PushBatchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .jobs.v1.Job jobs = 1;</code>
     */
    private $jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RoadRunner\Jobs\DTO\V1\Job>|\Google\Protobuf\Internal\RepeatedField $jobs
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Jobs\DTO\V1\GPBMetadata\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .jobs.v1.Job jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Generated from protobuf field <code>repeated .jobs.v1.Job jobs = 1;</code>
     * @param array<\RoadRunner\Jobs\DTO\V1\Job>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Jobs\DTO\V1\Job::class);
        $this->jobs = $arr;

        return $this;
    }

}

