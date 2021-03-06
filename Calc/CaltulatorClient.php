<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Calc;

/**
 */
class CaltulatorClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Calc\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Add(\Calc\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/calc.Caltulator/Add',
        $argument,
        ['\Calc\Response', 'decode'],
        $metadata, $options);
    }

}
