<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/core.proto

namespace GPBMetadata\Authzed\Api\V0;

class Core
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
authzed/api/v0/core.protoauthzed.api.v0"?
RelationTuple[
object_and_relation (2!.authzed.api.v0.ObjectAndRelationB?B?RobjectAndRelation2
user (2.authzed.api.v0.UserB?B?Ruser"?
ObjectAndRelationf
	namespace (	BH?BErC(?2>^([a-z][a-z0-9_]{1,61}[a-z0-9]/)?[a-z][a-z0-9_]{1,62}[a-z0-9]$R	namespaceR
	object_id (	B5?B2r0(?2+^(([a-zA-Z0-9_][a-zA-Z0-9/_|-]{0,127})|\\*)$RobjectIdL
relation (	B0?B-r+(@2\'^(\\.\\.\\.|[a-z][a-z0-9_]{1,62}[a-z0-9])$Rrelation"?
RelationReferencef
	namespace (	BH?BErC(?2>^([a-z][a-z0-9_]{1,61}[a-z0-9]/)?[a-z][a-z0-9_]{1,62}[a-z0-9]$R	namespaceL
relation (	B0?B-r+(@2\'^(\\.\\.\\.|[a-z][a-z0-9_]{1,62}[a-z0-9])$Rrelation"b
UserG
userset (2!.authzed.api.v0.ObjectAndRelationB?B?H RusersetB

user_oneof?BBH
com.authzed.api.v0Z2github.com/authzed/authzed-go/proto/authzed/api/v0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

