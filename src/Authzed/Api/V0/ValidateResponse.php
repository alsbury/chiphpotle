<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace Authzed\Api\V0;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v0.ValidateResponse</code>
 */
class ValidateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError request_errors = 1 [json_name = "requestErrors"];</code>
     */
    private $request_errors;
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError validation_errors = 2 [json_name = "validationErrors"];</code>
     */
    private $validation_errors;
    /**
     * Generated from protobuf field <code>string updated_validation_yaml = 3 [json_name = "updatedValidationYaml"];</code>
     */
    protected $updated_validation_yaml = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Authzed\Api\V0\DeveloperError>|\Google\Protobuf\Internal\RepeatedField $request_errors
     *     @type array<\Authzed\Api\V0\DeveloperError>|\Google\Protobuf\Internal\RepeatedField $validation_errors
     *     @type string $updated_validation_yaml
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V0\Developer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError request_errors = 1 [json_name = "requestErrors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequestErrors()
    {
        return $this->request_errors;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError request_errors = 1 [json_name = "requestErrors"];</code>
     * @param array<\Authzed\Api\V0\DeveloperError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequestErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V0\DeveloperError::class);
        $this->request_errors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError validation_errors = 2 [json_name = "validationErrors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidationErrors()
    {
        return $this->validation_errors;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v0.DeveloperError validation_errors = 2 [json_name = "validationErrors"];</code>
     * @param array<\Authzed\Api\V0\DeveloperError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidationErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V0\DeveloperError::class);
        $this->validation_errors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_validation_yaml = 3 [json_name = "updatedValidationYaml"];</code>
     * @return string
     */
    public function getUpdatedValidationYaml()
    {
        return $this->updated_validation_yaml;
    }

    /**
     * Generated from protobuf field <code>string updated_validation_yaml = 3 [json_name = "updatedValidationYaml"];</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedValidationYaml($var)
    {
        GPBUtil::checkString($var, True);
        $this->updated_validation_yaml = $var;

        return $this;
    }

}
