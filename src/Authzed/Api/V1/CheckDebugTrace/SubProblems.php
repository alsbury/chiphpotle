<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v1/debug.proto

namespace Authzed\Api\V1\CheckDebugTrace;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authzed.api.v1.CheckDebugTrace.SubProblems</code>
 */
class SubProblems extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.CheckDebugTrace traces = 1 [json_name = "traces"];</code>
     */
    private $traces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Authzed\Api\V1\CheckDebugTrace[]|\Google\Protobuf\Internal\RepeatedField $traces
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authzed\Api\V1\Debug::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.CheckDebugTrace traces = 1 [json_name = "traces"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * Generated from protobuf field <code>repeated .authzed.api.v1.CheckDebugTrace traces = 1 [json_name = "traces"];</code>
     * @param \Authzed\Api\V1\CheckDebugTrace[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTraces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authzed\Api\V1\CheckDebugTrace::class);
        $this->traces = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubProblems::class, \Authzed\Api\V1\CheckDebugTrace_SubProblems::class);

