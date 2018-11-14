<?php

namespace SFClient\Endpoint;

/**
 * Class Endpoint
 * @package SFClient\Endpoint
 */
class Endpoint {

  /**
   * @var string
   */
  protected $_baseUrl;

  /**
   * @var string
   */
  protected $_version;

  /**
   * Endpoint constructor.
   * @param string $baseUrl
   * @param string $version
   */
  public function __construct(string $baseUrl, string $version) {
    $this->_baseUrl = $baseUrl;
    $this->_version = $version;
  }

  /**
   * @return string
   */
  public function getUrl(): string {
    return "{$this->_baseUrl}/services/data/v{$this->_version}/";
  }
}