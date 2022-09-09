<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace Authzed\Api\V0\DeveloperError;

use UnexpectedValueException;

/**
 * Protobuf type <code>authzed.api.v0.DeveloperError.ErrorKind</code>
 */
class ErrorKind
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_KIND = 0;</code>
     */
    const UNKNOWN_KIND = 0;
    /**
     * Generated from protobuf enum <code>PARSE_ERROR = 1;</code>
     */
    const PARSE_ERROR = 1;
    /**
     * Generated from protobuf enum <code>SCHEMA_ISSUE = 2;</code>
     */
    const SCHEMA_ISSUE = 2;
    /**
     * Generated from protobuf enum <code>DUPLICATE_RELATIONSHIP = 3;</code>
     */
    const DUPLICATE_RELATIONSHIP = 3;
    /**
     * Generated from protobuf enum <code>MISSING_EXPECTED_RELATIONSHIP = 4;</code>
     */
    const MISSING_EXPECTED_RELATIONSHIP = 4;
    /**
     * Generated from protobuf enum <code>EXTRA_RELATIONSHIP_FOUND = 5;</code>
     */
    const EXTRA_RELATIONSHIP_FOUND = 5;
    /**
     * Generated from protobuf enum <code>UNKNOWN_OBJECT_TYPE = 6;</code>
     */
    const UNKNOWN_OBJECT_TYPE = 6;
    /**
     * Generated from protobuf enum <code>UNKNOWN_RELATION = 7;</code>
     */
    const UNKNOWN_RELATION = 7;
    /**
     * Generated from protobuf enum <code>MAXIMUM_RECURSION = 8;</code>
     */
    const MAXIMUM_RECURSION = 8;
    /**
     * Generated from protobuf enum <code>ASSERTION_FAILED = 9;</code>
     */
    const ASSERTION_FAILED = 9;

    private static $valueToName = [
        self::UNKNOWN_KIND => 'UNKNOWN_KIND',
        self::PARSE_ERROR => 'PARSE_ERROR',
        self::SCHEMA_ISSUE => 'SCHEMA_ISSUE',
        self::DUPLICATE_RELATIONSHIP => 'DUPLICATE_RELATIONSHIP',
        self::MISSING_EXPECTED_RELATIONSHIP => 'MISSING_EXPECTED_RELATIONSHIP',
        self::EXTRA_RELATIONSHIP_FOUND => 'EXTRA_RELATIONSHIP_FOUND',
        self::UNKNOWN_OBJECT_TYPE => 'UNKNOWN_OBJECT_TYPE',
        self::UNKNOWN_RELATION => 'UNKNOWN_RELATION',
        self::MAXIMUM_RECURSION => 'MAXIMUM_RECURSION',
        self::ASSERTION_FAILED => 'ASSERTION_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorKind::class, \Authzed\Api\V0\DeveloperError_ErrorKind::class);
