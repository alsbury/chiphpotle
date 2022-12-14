<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace Authzed\Api\V0;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v0.ValidateRequest</code>
 */
class ValidateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.authzed.api.v0.RequestContext context = 1 [json_name = "context"];</code>
     */
    protected $context = null;
    /**
     * Generated from protobuf field <code>string validation_yaml = 3 [json_name = "validationYaml"];</code>
     */
    protected $validation_yaml = '';
    /**
     * Generated from protobuf field <code>bool update_validation_yaml = 4 [json_name = "updateValidationYaml"];</code>
     */
    protected $update_validation_yaml = false;
    /**
     * Generated from protobuf field <code>string assertions_yaml = 5 [json_name = "assertionsYaml"];</code>
     */
    protected $assertions_yaml = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V0\RequestContext $context
     *     @type string $validation_yaml
     *     @type bool $update_validation_yaml
     *     @type string $assertions_yaml
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V0\Developer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v0.RequestContext context = 1 [json_name = "context"];</code>
     * @return \Authzed\Api\V0\RequestContext|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Generated from protobuf field <code>.authzed.api.v0.RequestContext context = 1 [json_name = "context"];</code>
     * @param \Authzed\Api\V0\RequestContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Authzed\Api\V0\RequestContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string validation_yaml = 3 [json_name = "validationYaml"];</code>
     * @return string
     */
    public function getValidationYaml()
    {
        return $this->validation_yaml;
    }

    /**
     * Generated from protobuf field <code>string validation_yaml = 3 [json_name = "validationYaml"];</code>
     * @param string $var
     * @return $this
     */
    public function setValidationYaml($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_yaml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool update_validation_yaml = 4 [json_name = "updateValidationYaml"];</code>
     * @return bool
     */
    public function getUpdateValidationYaml()
    {
        return $this->update_validation_yaml;
    }

    /**
     * Generated from protobuf field <code>bool update_validation_yaml = 4 [json_name = "updateValidationYaml"];</code>
     * @param bool $var
     * @return $this
     */
    public function setUpdateValidationYaml($var)
    {
        GPBUtil::checkBool($var);
        $this->update_validation_yaml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string assertions_yaml = 5 [json_name = "assertionsYaml"];</code>
     * @return string
     */
    public function getAssertionsYaml()
    {
        return $this->assertions_yaml;
    }

    /**
     * Generated from protobuf field <code>string assertions_yaml = 5 [json_name = "assertionsYaml"];</code>
     * @param string $var
     * @return $this
     */
    public function setAssertionsYaml($var)
    {
        GPBUtil::checkString($var, True);
        $this->assertions_yaml = $var;

        return $this;
    }

}

