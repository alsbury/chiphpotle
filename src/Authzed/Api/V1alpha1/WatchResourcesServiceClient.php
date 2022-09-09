<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Authzed\Api\V1alpha1;

/**
 * WatchResourcesService is used to receive a stream of updates for resources of a
 * specific (resource type, permission, subject) combination.
 */
class WatchResourcesServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * WatchResources initiates a watch for permission changes for the provided
     * (resource type, permission, subject) pair.
     * @param \Authzed\Api\V1alpha1\WatchResourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function WatchResources(\Authzed\Api\V1alpha1\WatchResourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/authzed.api.v1alpha1.WatchResourcesService/WatchResources',
        $argument,
        ['\Authzed\Api\V1alpha1\WatchResourcesResponse', 'decode'],
        $metadata, $options);
    }

}
