<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/replication/v1/message.proto

namespace Temporal\Api\Replication\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.replication.v1.NamespaceReplicationConfig</code>
 */
class NamespaceReplicationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string active_cluster_name = 1;</code>
     */
    protected $active_cluster_name = '';
    /**
     * Generated from protobuf field <code>repeated .temporal.api.replication.v1.ClusterReplicationConfig clusters = 2;</code>
     */
    private $clusters;
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ReplicationState state = 3;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $active_cluster_name
     *     @type array<\Temporal\Api\Replication\V1\ClusterReplicationConfig>|\Google\Protobuf\Internal\RepeatedField $clusters
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Replication\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string active_cluster_name = 1;</code>
     * @return string
     */
    public function getActiveClusterName()
    {
        return $this->active_cluster_name;
    }

    /**
     * Generated from protobuf field <code>string active_cluster_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_cluster_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.replication.v1.ClusterReplicationConfig clusters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.replication.v1.ClusterReplicationConfig clusters = 2;</code>
     * @param array<\Temporal\Api\Replication\V1\ClusterReplicationConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Replication\V1\ClusterReplicationConfig::class);
        $this->clusters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ReplicationState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ReplicationState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ReplicationState::class);
        $this->state = $var;

        return $this;
    }

}

