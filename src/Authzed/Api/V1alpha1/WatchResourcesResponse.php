<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1alpha1/watchresources_service.proto

namespace Authzed\Api\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WatchResourcesResponse enumerates the list of permission updates that have
 * occurred as a result of one or more relationship updates.
 *
 * Generated from protobuf message <code>authzed.api.v1alpha1.WatchResourcesResponse</code>
 */
class WatchResourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1alpha1.PermissionUpdate updates = 1 [json_name = "updates"];</code>
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
     *     @type \Authzed\Api\V1alpha1\PermissionUpdate[]|\Google\Protobuf\Internal\RepeatedField $updates
     *     @type \Authzed\Api\V1\ZedToken $changes_through
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1Alpha1\WatchresourcesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1alpha1.PermissionUpdate updates = 1 [json_name = "updates"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1alpha1.PermissionUpdate updates = 1 [json_name = "updates"];</code>
     * @param \Authzed\Api\V1alpha1\PermissionUpdate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1alpha1\PermissionUpdate::class);
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

