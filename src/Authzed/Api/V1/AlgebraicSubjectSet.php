<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/core.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AlgebraicSubjectSet is a subject set which is computed based on applying the
 * specified operation to the operands according to the algebra of sets.
 * UNION is a logical set containing the subject members from all operands.
 * INTERSECTION is a logical set containing only the subject members which are
 * present in all operands.
 * EXCLUSION is a logical set containing only the subject members which are
 * present in the first operand, and none of the other operands.
 *
 * Generated from protobuf message <code>authzed.api.v1.AlgebraicSubjectSet</code>
 */
class AlgebraicSubjectSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1 [json_name = "operation"];</code>
     */
    protected $operation = 0;
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2 [json_name = "children"];</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operation
     *     @type \Authzed\Api\V1\PermissionRelationshipTree[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1 [json_name = "operation"];</code>
     * @return int
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.AlgebraicSubjectSet.Operation operation = 1 [json_name = "operation"];</code>
     * @param int $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkEnum($var, \Authzed\Api\V1\AlgebraicSubjectSet\Operation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2 [json_name = "children"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.PermissionRelationshipTree children = 2 [json_name = "children"];</code>
     * @param \Authzed\Api\V1\PermissionRelationshipTree[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\PermissionRelationshipTree::class);
        $this->children = $arr;

        return $this;
    }

}

