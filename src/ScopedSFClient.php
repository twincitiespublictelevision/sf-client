<?php

namespace SFClient;

use GuzzleHttp\Client;
use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;

/**
 * Class ScopedSFClient
 * @package SFClient
 */
class ScopedSFClient {

  /**
   * @var SFClient
   */
  protected $_client;

  /**
   * @var string
   */
  protected $_scope;

  /**
   * ScopedSFClient constructor.
   * @param Client $client
   * @param string $objectScope
   */
  public function __construct(SFClient $client, string $objectScope) {
    $this->_client = $client;
    $this->_scope = $objectScope;
  }

  /**
   * @return string
   */
  public function getScope(): string {
    return $this->_scope;
  }

  /**
   * @param array $data
   * @return SFCreationResult
   */
  public function create(array $data): SFCreationResult {
    return $this->_client->create($this->_scope, $data);
  }

  /**
   * @param string $id
   * @return SFObjectResult
   */
  public function get(string $id): SFObjectResult {
    return $this->_client->get($this->_scope, $id);
  }

  /**
   * @param string $id
   * @param array $data
   * @return BoolResult
   */
  public function patch(string $id, array $data): BoolResult {
    return $this->_client->patch($this->_scope, $id, $data);
  }

  /**
   * @param string $id
   * @return BoolResult
   */
  public function delete(string $id): BoolResult {
    return $this->_client->delete($this->_scope, $id);
  }
}