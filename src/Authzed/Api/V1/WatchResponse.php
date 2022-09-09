<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/watch_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WatchResponse contains all tuple modification events in ascending
 * timestamp order, from the requested start snapshot to a snapshot
 * encoded in the watch response. The client can use the snapshot to resume
 * watching where the previous watch response left off.
 *
 * Generated from protobuf message <code>authzed.api.v1.WatchResponse</code>
 */
class WatchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates"];</code>
     */
    private $updates;
    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken changes_through = 2 [json_name = "changesThrough"];</code>
     */
    protected $changes_through = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Authzed\Api\V1\RelationshipUpdate>|\Google\Protobuf\Internal\RepeatedField $updates
     *     @type \Authzed\Api\V1\ZedToken $changes_through
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\WatchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates"];</code>
     * @param array<\Authzed\Api\V1\RelationshipUpdate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\RelationshipUpdate::class);
        $this->updates = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken changes_through = 2 [json_name = "changesThrough"];</code>
     * @return \Authzed\Api\V1\ZedToken|null
     */
    public function getChangesThrough()
    {
        return $this->changes_through;
    }

    public function hasChangesThrough()
    {
        return isset($this->changes_through);
    }

    public function clearChangesThrough()
    {
        unset($this->changes_through);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken changes_through = 2 [json_name = "changesThrough"];</code>
     * @param \Authzed\Api\V1\ZedToken $var
     * @return $this
     */
    public function setChangesThrough($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\ZedToken::class);
        $this->changes_through = $var;

        return $this;
    }

}

