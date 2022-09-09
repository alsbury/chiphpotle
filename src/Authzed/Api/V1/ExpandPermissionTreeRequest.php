<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/permission_service.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExpandPermissionTreeRequest returns a tree representing the expansion of all
 * relationships found accessible from a permission or relation on a particular
 * resource.
 * ExpandPermissionTreeRequest is typically used to determine the full set of
 * subjects with a permission, along with the relationships that grant said
 * access.
 *
 * Generated from protobuf message <code>authzed.api.v1.ExpandPermissionTreeRequest</code>
 */
class ExpandPermissionTreeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v1.Consistency consistency = 1 [json_name = "consistency"];</code>
     */
    protected $consistency = null;
    /**
     * resource is the resource over which to run the expansion.
     *
     * Generated from protobuf field <code>.authzed.api.v1.ObjectReference resource = 2 [json_name = "resource", (.validate.rules) = {</code>
     */
    protected $resource = null;
    /**
     * permission is the name of the permission or relation over which to run the
     * expansion for the resource.
     *
     * Generated from protobuf field <code>string permission = 3 [json_name = "permission", (.validate.rules) = {</code>
     */
    protected $permission = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V1\Consistency $consistency
     *     @type \Authzed\Api\V1\ObjectReference $resource
     *           resource is the resource over which to run the expansion.
     *     @type string $permission
     *           permission is the name of the permission or relation over which to run the
     *           expansion for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\PermissionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.Consistency consistency = 1 [json_name = "consistency"];</code>
     * @return \Authzed\Api\V1\Consistency|null
     */
    public function getConsistency()
    {
        return $this->consistency;
    }

    public function hasConsistency()
    {
        return isset($this->consistency);
    }

    public function clearConsistency()
    {
        unset($this->consistency);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v1.Consistency consistency = 1 [json_name = "consistency"];</code>
     * @param \Authzed\Api\V1\Consistency $var
     * @return $this
     */
    public function setConsistency($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\Consistency::class);
        $this->consistency = $var;

        return $this;
    }

    /**
     * resource is the resource over which to run the expansion.
     *
     * Generated from protobuf field <code>.authzed.api.v1.ObjectReference resource = 2 [json_name = "resource", (.validate.rules) = {</code>
     * @return \Authzed\Api\V1\ObjectReference|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * resource is the resource over which to run the expansion.
     *
     * Generated from protobuf field <code>.authzed.api.v1.ObjectReference resource = 2 [json_name = "resource", (.validate.rules) = {</code>
     * @param \Authzed\Api\V1\ObjectReference $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V1\ObjectReference::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * permission is the name of the permission or relation over which to run the
     * expansion for the resource.
     *
     * Generated from protobuf field <code>string permission = 3 [json_name = "permission", (.validate.rules) = {</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * permission is the name of the permission or relation over which to run the
     * expansion for the resource.
     *
     * Generated from protobuf field <code>string permission = 3 [json_name = "permission", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

}

