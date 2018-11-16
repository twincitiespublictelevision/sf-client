<?php

namespace SFClient\Auth;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use function SFClient\ex_json_decode;

/**
 * Class PasswordAuth
 *
 * Implements the Password authentication mechanism of the SalesForce REST API
 *
 * @package SFClient\Auth
 */
class PasswordAuth implements Authentication {

  const GRANT_TYPE = 'password';
  const OAUTH_TOKEN_PATH = 'services/oauth2/token';

  /**
   * @var string
   */
  protected $_key;

  /**
   * @var string
   */
  protected $_secret;

  /**
   * @var string
   */
  protected $_username;

  /**
   * @var string
   */
  protected $_password;

  /**
   * PasswordAuth constructor.
   * @param string $key
   * @param string $secret
   * @param string $username
   * @param string $password
   */
  public function __construct(string $key, string $secret, string $username, string $password) {
    $this->_key = $key;
    $this->_secret = $secret;
    $this->_username = $username;
    $this->_password = $password;
  }

  /**
   * Constructs a new request for retrieving an access token form the SalesForce
   * REsT APi using the configured credentials.
   *
   * @return Request
   */
  public function getTokenRequest(): Request {
    return new Request(
      'POST',
      static::OAUTH_TOKEN_PATH,
      ['content-type' => 'application/x-www-form-urlencoded'],
      http_build_query([
        'grant_type' => static::GRANT_TYPE,
        'client_id' => $this->_key,
        'client_secret' => $this->_secret,
        'username' => $this->_username,
        'password' => $this->_password
      ])
    );
  }

  /**
   * Attempts to extract an access token from a response object that resulted
   * from running a request generated by this class. If a token is found it will
   * be returned, otherwise null is returned.
   *
   * @param Response $response A response from the SalesForce token endpoint
   * @return null|string
   */
  public function getTokenFromResponse(Response $response): ?string {
    try {
      $content = ex_json_decode($response->getBody());

      if ($content instanceof \stdClass && isset($content->access_token) && $content->access_token) {
        return $content->access_token;
      }
    } catch (\InvalidArgumentException $ex) {}

    return null;
  }
}