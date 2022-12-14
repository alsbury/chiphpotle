<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReadRelationshipsResponse contains a Relationship found that matches the
 * specified relationship filter(s). A instance of this response message will
 * be streamed to the client for each relationship found.
 *
 * Generated from protobuf message <code>authzed.api.v1.ReadRelationshipsResponse</code>
 */
class ReadRelationshipsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken read_at = 1 [json_name = "readAt"];</code>
     */
    protected $read_at = null;
    /**
     * Generated from protobuf field <code>.authzed.api.v1.Relationship relationship = 2 [json_name = "relationship"];</code>
     */
    protected $relationship = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V1\ZedToken $read_at
     *     @type \Authzed\Api\V1\Relationship $relationship
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\PermissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken read_at = 1 [json_name = "readAt"];</code>
     * @return \Authzed\Api\V1\ZedToken|null
     */
    public function getReadAt()
    {
        return $this->read_at;
    }

    public function hasReadAt()
    {
        return isset($this->read_at);
    }

    public function clearReadAt()
    {
        unset($this->read_at);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.ZedToken read_at = 1 [json_name = "readAt"];</code>
     * @param \Authzed\Api\V1\ZedToken $var
     * @return $this
     */
    public function setReadAt($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\ZedToken::class);
        $this->read_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.Relationship relationship = 2 [json_name = "relationship"];</code>
     * @return \Authzed\Api\V1\Relationship|null
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    public function hasRelationship()
    {
        return isset($this->relationship);
    }

    public function clearRelationship()
    {
        unset($this->relationship);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.Relationship relationship = 2 [json_name = "relationship"];</code>
     * @param \Authzed\Api\V1\Relationship $var
     * @return $this
     */
    public function setRelationship($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\Relationship::class);
        $this->relationship = $var;

        return $this;
    }

}

