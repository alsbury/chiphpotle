<?php
/**
 * This is a port of the authzed Ruby example
 */

use Authzed\Api\V1\ObjectReference;
use Authzed\Api\V1\PermissionsServiceClient;
use Authzed\Api\V1\Relationship;
use Authzed\Api\V1\RelationshipUpdate;
use Authzed\Api\V1\RelationshipUpdate\Operation as RelationshipUpdateOperation;
use Authzed\Api\V1\SubjectReference;
use Authzed\Api\V1\WriteRelationshipsRequest;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$client = new PermissionsServiceClient('spicedb:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$emilia = new SubjectReference([
    'object' => new ObjectReference([
        'object_type' => 'blog/user',
        'object_id' => 'emilia'
    ])
]);
$beatrice = new SubjectReference([
    'object' => new ObjectReference([
        'object_type' => 'blog/user',
        'object_id' => 'beatrice'
    ])
]);

$post_one = new ObjectReference([
    'object_type' => 'blog/post',
    'object_id' => "1"
]);

$client->WriteRelationships(new WriteRelationshipsRequest([
    'updates' => [
        new RelationshipUpdate([
            'operation' => RelationshipUpdateOperation::OPERATION_TOUCH,
            'relationship' => new Relationship([
                'resource' => $post_one,
            ])
        ])
    ]
]));

