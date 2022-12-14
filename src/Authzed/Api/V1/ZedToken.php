<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/core.proto

namespace Authzed\Api\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ZedToken is used to provide causality metadata between Write and Check
 * requests.
 * See the authzed.api.v1.Consistency message for more information.
 *
 * Generated from protobuf message <code>authzed.api.v1.ZedToken</code>
 */
class ZedToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1 [json_name = "token", (.validate.rules) = {</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1 [json_name = "token", (.validate.rules) = {</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1 [json_name = "token", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

