<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/schema_service.proto

namespace GPBMetadata\Authzed\Api\V1;

class SchemaService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#authzed/api/v1/schema_service.protoauthzed.api.v1validate/validate.proto"
ReadSchemaRequest"5
ReadSchemaResponse
schema_text (	R
schemaText"7
WriteSchemaRequest!
schema (	B	�Br(��Rschema"
WriteSchemaResponse2�


ReadSchema!.authzed.api.v1.ReadSchemaRequest".authzed.api.v1.ReadSchemaResponse"���"/v1/schema/read:*s
WriteSchema".authzed.api.v1.WriteSchemaRequest#.authzed.api.v1.WriteSchemaResponse"���"/v1/schema/write:*BH
com.authzed.api.v1Z2github.com/authzed/authzed-go/proto/authzed/api/v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
