<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WriteRelationshipsRequest contains a list of Relationship mutations that
 * should be applied to the service. If the optional_preconditions parameter
 * is included, all of the specified preconditions must also be satisfied before
 * the write will be committed.
 *
 * Generated from protobuf message <code>authzed.api.v1.WriteRelationshipsRequest</code>
 */
class WriteRelationshipsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates", (.validate.rules) = {</code>
     */
    private $updates;
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
     *     @type array<\Authzed\Api\V1\RelationshipUpdate>|\Google\Protobuf\Internal\RepeatedField $updates
     *     @type array<\Authzed\Api\V1\Precondition>|\Google\Protobuf\Internal\RepeatedField $optional_preconditions
     *           To be bounded by configuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\PermissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.RelationshipUpdate updates = 1 [json_name = "updates", (.validate.rules) = {</code>
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

