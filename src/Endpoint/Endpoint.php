<?php

namespace SFClient\Endpoint;

/**
 * Class Endpoint
 *
 * A representation of a versioned SalesForce REST API endpoint.
 *
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
   *
   * The provided SalesForce base url should omit a trailing slash. The version
   * should be of the form \d\d.\d and should omit the preceding 'v'.
   *
   * ```php
   * $endpoint = new Endpoint('https://company.my.salesforce.com', '10.0');
   *
   * ```
   *
   * @param string $baseUrl
   * @param string $version
   */
  public function __construct(string $baseUrl, string $version) {
    $this->_baseUrl = $baseUrl;
    $this->_version = $version;
  }

  /**
   * Gets the full endpoint url
   *
   * @return string
   */
  public function getUrl(): string {
    return "{$this->_baseUrl}/services/data/v{$this->_version}/";
  }
}