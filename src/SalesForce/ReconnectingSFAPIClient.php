<?php

namespace SFClient\SalesForce;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use SFClient\Result\Result;
use SFClient\Auth\Authentication;
use SFClient\Exceptions\FailedToAuthenticate;

/**
 * Class ReconnectingSFAPIClient
 *
 * An extension of the SalesForce API Client that will make
 * a second authorization attempt if the first run attempt results in a
 * 401 Error.
 *
 * @package SFClient\SalesForce
 */
class ReconnectingSFAPIClient extends SFAPIClient {
  private $_auth;

  /**
   * ReconnectingSFClient constructor.
   * @param Client $client
   * @param string $token
   * @param Authentication $auth
   */
  protected function __construct(Client $client, string $token, Authentication $auth) {
    parent::__construct($client, $token);
    $this->_auth = $auth;
  }

  /**
   * Constructs a new SalesForce API client with a custom Http client and the
   * given authentication mechanism.  Extended from SFAPIClient::connectWith() to
   * include $auth in the construction of the ReconnectingSFAPIClient.
   *
   * @param Client $client Http client that will be used by the ReconnectingSFAPIClient to communicate with the SalesForce API
   * @param Authentication $auth SalesForce authentication mechanism
   * @return SFAPIClient
   * @throws FailedToAuthenticate
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public static function connectWith(Client $client, Authentication $auth): SFAPIClient {
    $token = $auth->getTokenFromResponse(
      $client->send($auth->getTokenRequest())
    );

    if ($token === null) {
      throw new FailedToAuthenticate();
    }

    return new ReconnectingSFAPIClient(
      $client,
      $token,
      $auth
    );
  }

  /**
   * Executes an arbitrary request against the SalesForce API.  Extended from
   * SFAPICLient to attempt reauthorization if the request fails due to a 401 error
   *
   * @param Request $request
   * @param boolean $retry
   * @return Result
   * @internal
   */
  public function run(Request $request, $retry = true): Result {
    try {
      return Result::ok($this->_send(
        $this->authenticatedRequest($request)
      ));
    } catch (ClientException $e) {
      if ($e->getCode() == 401 && $retry) {
        // Create new auth token and try again
        $token = $this->_auth->getTokenFromResponse(
          $this->_client->send($this->_auth->getTokenRequest())
        );

        if ($token === null) {
          return Result::err(new FailedToAuthenticate());
        }

        $this->_token = $token;
        return $this->run($request, false);
      }

      return Result::err($e);
    } catch (\Exception $e) {
      return Result::err($e);
    }
  }
}