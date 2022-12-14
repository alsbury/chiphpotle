<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace Authzed\Api\V0;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v0.FormatSchemaRequest</code>
 */
class FormatSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string schema = 1 [json_name = "schema"];</code>
     */
    protected $schema = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V0\Developer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string schema = 1 [json_name = "schema"];</code>
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Generated from protobuf field <code>string schema = 1 [json_name = "schema"];</code>
     * @param string $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema = $var;

        return $this;
    }

}

