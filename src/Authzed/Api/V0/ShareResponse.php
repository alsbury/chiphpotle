<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace Authzed\Api\V0;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v0.ShareResponse</code>
 */
class ShareResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string share_reference = 1 [json_name = "shareReference"];</code>
     */
    protected $share_reference = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $share_reference
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V0\Developer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string share_reference = 1 [json_name = "shareReference"];</code>
     * @return string
     */
    public function getShareReference()
    {
        return $this->share_reference;
    }

    /**
     * Generated from protobuf field <code>string share_reference = 1 [json_name = "shareReference"];</code>
     * @param string $var
     * @return $this
     */
    public function setShareReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->share_reference = $var;

        return $this;
    }

}

