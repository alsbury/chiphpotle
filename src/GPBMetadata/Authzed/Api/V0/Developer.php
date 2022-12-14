<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authzed/api/v0/developer.proto

namespace GPBMetadata\Authzed\Api\V0;

class Developer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Authzed\Api\V0\Core::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
authzed/api/v0/developer.protoauthzed.api.v0"-
FormatSchemaRequest
schema (	Rschema"w
FormatSchemaResponse4
error (2.authzed.api.v0.DeveloperErrorRerror)
formatted_schema (	RformattedSchema"C
UpgradeSchemaRequest+
namespace_configs (	RnamespaceConfigs"v
UpgradeSchemaResponse4
error (2.authzed.api.v0.DeveloperErrorRerror\'
upgraded_schema (	RupgradedSchema"?
ShareRequest
schema (	Rschema-
relationships_yaml (	RrelationshipsYaml\'
validation_yaml (	RvalidationYaml\'
assertions_yaml (	RassertionsYaml"8
ShareResponse\'
share_reference (	RshareReference"=
LookupShareRequest\'
share_reference (	RshareReference"?
LookupShareResponseH
status (20.authzed.api.v0.LookupShareResponse.LookupStatusRstatus
schema (	Rschema-
relationships_yaml (	RrelationshipsYaml\'
validation_yaml (	RvalidationYaml\'
assertions_yaml (	RassertionsYaml"h
LookupStatus
UNKNOWN_REFERENCE 
FAILED_TO_LOOKUP
VALID_REFERENCE
UPGRADED_REFERENCE"s
RequestContext
schema (	RschemaC
relationships (2.authzed.api.v0.RelationTupleRrelationshipsJ"?
EditCheckRequest8
context (2.authzed.api.v0.RequestContextRcontextN
check_relationships (2.authzed.api.v0.RelationTupleRcheckRelationships"?
EditCheckResultA
relationship (2.authzed.api.v0.RelationTupleRrelationship
	is_member (RisMember4
error (2.authzed.api.v0.DeveloperErrorRerror"?
EditCheckResponseE
request_errors (2.authzed.api.v0.DeveloperErrorRrequestErrorsD
check_results (2.authzed.api.v0.EditCheckResultRcheckResults"?
ValidateRequest8
context (2.authzed.api.v0.RequestContextRcontext\'
validation_yaml (	RvalidationYaml4
update_validation_yaml (RupdateValidationYaml\'
assertions_yaml (	RassertionsYaml"?
ValidateResponseE
request_errors (2.authzed.api.v0.DeveloperErrorRrequestErrorsK
validation_errors (2.authzed.api.v0.DeveloperErrorRvalidationErrors6
updated_validation_yaml (	RupdatedValidationYaml"?
DeveloperError
message (	Rmessage
line (Rline
column (Rcolumn=
source (2%.authzed.api.v0.DeveloperError.SourceRsource<
kind (2(.authzed.api.v0.DeveloperError.ErrorKindRkind
path (	Rpath
context (	Rcontext"o
Source
UNKNOWN_SOURCE 

SCHEMA
RELATIONSHIP
VALIDATION_YAML
CHECK_WATCH
	ASSERTION"?
	ErrorKind
UNKNOWN_KIND 
PARSE_ERROR
SCHEMA_ISSUE
DUPLICATE_RELATIONSHIP!
MISSING_EXPECTED_RELATIONSHIP
EXTRA_RELATIONSHIP_FOUND
UNKNOWN_OBJECT_TYPE
UNKNOWN_RELATION
MAXIMUM_RECURSION
ASSERTION_FAILED	2?
DeveloperServiceR
	EditCheck .authzed.api.v0.EditCheckRequest!.authzed.api.v0.EditCheckResponse" O
Validate.authzed.api.v0.ValidateRequest .authzed.api.v0.ValidateResponse" F
Share.authzed.api.v0.ShareRequest.authzed.api.v0.ShareResponse" Y
LookupShared".authzed.api.v0.LookupShareRequest#.authzed.api.v0.LookupShareResponse" ^
UpgradeSchema$.authzed.api.v0.UpgradeSchemaRequest%.authzed.api.v0.UpgradeSchemaResponse" [
FormatSchema#.authzed.api.v0.FormatSchemaRequest$.authzed.api.v0.FormatSchemaResponse" BH
com.authzed.api.v0Z2github.com/authzed/authzed-go/proto/authzed/api/v0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

