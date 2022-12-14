<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/core.proto

namespace Authzed\Api\V0;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v0.RelationTuple</code>
 */
class RelationTuple extends \Google\Protobuf\Internal\Message
{
    /**
     * Each tupleset specifies keys of a set of relation tuples. The set can
     * include a single tuple key, or all tuples with a given object ID or
     * userset in a namespace, optionally constrained by a relation name.
     * examples:
     * doc:readme#viewer&#64;group:eng#member (fully specified)
     * doc:*#*#group:eng#member (all tuples that this userset relates to)
     * doc:12345#*#* (all tuples with a direct relationship to a document)
     * doc:12345#writer#* (all tuples with direct write relationship with the
     * document) doc:#writer#group:eng#member (all tuples that eng group has write
     * relationship)
     *
     * Generated from protobuf field <code>.authzed.api.v0.ObjectAndRelation object_and_relation = 1 [json_name = "objectAndRelation", (.validate.rules) = {</code>
     */
    protected $object_and_relation = null;
    /**
     * Generated from protobuf field <code>.authzed.api.v0.User user = 2 [json_name = "user", (.validate.rules) = {</code>
     */
    protected $user = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V0\ObjectAndRelation $object_and_relation
     *           Each tupleset specifies keys of a set of relation tuples. The set can
     *           include a single tuple key, or all tuples with a given object ID or
     *           userset in a namespace, optionally constrained by a relation name.
     *           examples:
     *           doc:readme#viewer&#64;group:eng#member (fully specified)
     *           doc:*#*#group:eng#member (all tuples that this userset relates to)
     *           doc:12345#*#* (all tuples with a direct relationship to a document)
     *           doc:12345#writer#* (all tuples with direct write relationship with the
     *           document) doc:#writer#group:eng#member (all tuples that eng group has write
     *           relationship)
     *     @type \Authzed\Api\V0\User $user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V0\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Each tupleset specifies keys of a set of relation tuples. The set can
     * include a single tuple key, or all tuples with a given object ID or
     * userset in a namespace, optionally constrained by a relation name.
     * examples:
     * doc:readme#viewer&#64;group:eng#member (fully specified)
     * doc:*#*#group:eng#member (all tuples that this userset relates to)
     * doc:12345#*#* (all tuples with a direct relationship to a document)
     * doc:12345#writer#* (all tuples with direct write relationship with the
     * document) doc:#writer#group:eng#member (all tuples that eng group has write
     * relationship)
     *
     * Generated from protobuf field <code>.authzed.api.v0.ObjectAndRelation object_and_relation = 1 [json_name = "objectAndRelation", (.validate.rules) = {</code>
     * @return \Authzed\Api\V0\ObjectAndRelation|null
     */
    public function getObjectAndRelation()
    {
        return $this->object_and_relation;
    }

    public function hasObjectAndRelation()
    {
        return isset($this->object_and_relation);
    }

    public function clearObjectAndRelation()
    {
        unset($this->object_and_relation);
    }

    /**
     * Each tupleset specifies keys of a set of relation tuples. The set can
     * include a single tuple key, or all tuples with a given object ID or
     * userset in a namespace, optionally constrained by a relation name.
     * examples:
     * doc:readme#viewer&#64;group:eng#member (fully specified)
     * doc:*#*#group:eng#member (all tuples that this userset relates to)
     * doc:12345#*#* (all tuples with a direct relationship to a document)
     * doc:12345#writer#* (all tuples with direct write relationship with the
     * document) doc:#writer#group:eng#member (all tuples that eng group has write
     * relationship)
     *
     * Generated from protobuf field <code>.authzed.api.v0.ObjectAndRelation object_and_relation = 1 [json_name = "objectAndRelation", (.validate.rules) = {</code>
     * @param \Authzed\Api\V0\ObjectAndRelation $var
     * @return $this
     */
    public function setObjectAndRelation($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V0\ObjectAndRelation::class);
        $this->object_and_relation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v0.User user = 2 [json_name = "user", (.validate.rules) = {</code>
     * @return \Authzed\Api\V0\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v0.User user = 2 [json_name = "user", (.validate.rules) = {</code>
     * @param \Authzed\Api\V0\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V0\User::class);
        $this->user = $var;

        return $this;
    }

}

