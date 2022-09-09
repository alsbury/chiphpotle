<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeleteRelationshipsRequest specifies which Relationships should be deleted,
 * requesting the delete of *ALL* relationships that match the specified
 * filters. If the optional_preconditions parameter is included, all of the
 * specified preconditions must also be satisfied before the delete will be
 * executed.
 *
 * Generated from protobuf message <code>authzed.api.v1.DeleteRelationshipsRequest</code>
 */
class DeleteRelationshipsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v1.RelationshipFilter relationship_filter = 1 [json_name = "relationshipFilter", (.validate.rules) = {</code>
     */
    protected $relationship_filter = null;
    /**
     * To be bounded by configuration
     *
     * Generated from protobuf field <code>repeated .authzed.api.v1.Precondition optional_preconditions = 2 [json_name = "optionalPreconditions", (.validate.rules) = {</code>
     */
    private $optional_preconditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V1\RelationshipFilter $relationship_filter
     *     @type array<\Authzed\Api\V1\Precondition>|\Google\Protobuf\Internal\RepeatedField $optional_preconditions
     *           To be bounded by configuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\PermissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.RelationshipFilter relationship_filter = 1 [json_name = "relationshipFilter", (.validate.rules) = {</code>
     * @return \Authzed\Api\V1\RelationshipFilter|null
     */
    public function getRelationshipFilter()
    {
        return $this->relationship_filter;
    }

    public function hasRelationshipFilter()
    {
        return isset($this->relationship_filter);
    }

    public function clearRelationshipFilter()
    {
        unset($this->relationship_filter);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.RelationshipFilter relationship_filter = 1 [json_name = "relationshipFilter", (.validate.rules) = {</code>
     * @param \Authzed\Api\V1\RelationshipFilter $var
     * @return $this
     */
    public function setRelationshipFilter($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\RelationshipFilter::class);
        $this->relationship_filter = $var;

        return $this;
    }

    /**
     * To be bounded by configuration
     *
     * Generated from protobuf field <code>repeated .authzed.api.v1.Precondition optional_preconditions = 2 [json_name = "optionalPreconditions", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptionalPreconditions()
    {
        return $this->optional_preconditions;
    }

    /**
     * To be bounded by configuration
     *
     * Generated from protobuf field <code>repeated .authzed.api.v1.Precondition optional_preconditions = 2 [json_name = "optionalPreconditions", (.validate.rules) = {</code>
     * @param array<\Authzed\Api\V1\Precondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptionalPreconditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\Precondition::class);
        $this->optional_preconditions = $arr;

        return $this;
    }

}

