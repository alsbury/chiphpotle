<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Authzed\Api\V0;

/**
 */
class DeveloperServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Authzed\Api\V0\EditCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EditCheck(\Authzed\Api\V0\EditCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/EditCheck',
        $argument,
        ['\Authzed\Api\V0\EditCheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authzed\Api\V0\ValidateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Validate(\Authzed\Api\V0\ValidateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/Validate',
        $argument,
        ['\Authzed\Api\V0\ValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authzed\Api\V0\ShareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Share(\Authzed\Api\V0\ShareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/Share',
        $argument,
        ['\Authzed\Api\V0\ShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authzed\Api\V0\LookupShareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupShared(\Authzed\Api\V0\LookupShareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/LookupShared',
        $argument,
        ['\Authzed\Api\V0\LookupShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authzed\Api\V0\UpgradeSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpgradeSchema(\Authzed\Api\V0\UpgradeSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/UpgradeSchema',
        $argument,
        ['\Authzed\Api\V0\UpgradeSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Authzed\Api\V0\FormatSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FormatSchema(\Authzed\Api\V0\FormatSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authzed.api.v0.DeveloperService/FormatSchema',
        $argument,
        ['\Authzed\Api\V0\FormatSchemaResponse', 'decode'],
        $metadata, $options);
    }

}
