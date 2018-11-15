<?php

namespace SFClient\SalesForce;

use GuzzleHttp\Client;
use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;

/**
 * Class ScopedSFAPIClient
 *
 * A SalesForce API client that is scoped down to a specific SalesForce object
 * type. The scoped clients wraps an existing SalesForce API client meaning that
 * calls to the scoped client are passed on to the SalesForce API client that
 * was used to construct the scoped client.
 *
 * This can be useful when needing to pass to an external system, a client that
 * has reduced capabilities.
 *
 * ```php
 * $accounts = new ScopedSFAPIClient($sfClient, 'Account');
 *
 * perform_account_logic($accounts);
 *
 * ```
 *
 * @package SFClient\SalesForce
 */
class ScopedSFAPIClient {

  /**
   * @var SFAPIClient
   */
  protected $_client;

  /**
   * @var string
   */
  protected $_scope;

  /**
   * Creates a SalesForce API client scoped to a particular object type.
   *
   * ScopedSFClient constructor.
   * @param Client $client SalesForce API client to wrap
   * @param string $objectScope Object type to query against
   */
  public function __construct(SFAPIClient $client, string $objectScope) {
    $this->_client = $client;
    $this->_scope = $objectScope;
  }

  /**
   * Returns the object type scope that is applied to this client
   *
   * @return string
   */
  public function getScope(): string {
    return $this->_scope;
  }

  /**
   * @param array $data
   * @return SFCreationResult
   * @see SFAPIClient::create()
   */
  public function create(array $data): SFCreationResult {
    return $this->_client->create($this->_scope, $data);
  }


  /**
   * @param string $id
   * @param array $fields
   * @return SFObjectResult
   * @see SFAPIClient::get()
   */
  public function get(string $id, array $fields = []): SFObjectResult {
    return $this->_client->get($this->_scope, $id, $fields);
  }

  /**
   * @param string $id
   * @param array $data
   * @return BoolResult
   * @see SFAPIClient::patch()
   */
  public function patch(string $id, array $data): BoolResult {
    return $this->_client->patch($this->_scope, $id, $data);
  }

  /**
   * @param string $id
   * @return BoolResult
   * @see SFAPIClient::delete()
   */
  public function delete(string $id): BoolResult {
    return $this->_client->delete($this->_scope, $id);
  }
}