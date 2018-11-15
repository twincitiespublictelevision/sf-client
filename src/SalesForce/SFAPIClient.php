<?php

namespace SFClient\SalesForce;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use function SFClient\ex_json_decode;
use function SFClient\ex_json_encode;
use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\Result\SFRecordsResult;
use SFClient\SalesForce\SFCreation;
use SFClient\SalesForce\SFRecords;
use SFClient\SalesForce\SFObject;
use SFClient\Auth\Authentication;
use SFClient\Endpoint\Endpoint;
use SFClient\Exceptions\FailedToAuthenticate;
use SFClient\Result\Result;

/**
 * Class SFClient
 * @package SFClient\SalesForce
 */
class SFAPIClient {

  const OBJECT_API = 'sobjects';

  /**
   * @var Client
   */
  protected $_client;

  /**
   * @var string
   */
  protected $_token;

  /**
   * SFClient constructor.
   * @param Client $client
   * @param string $token
   */
  private function __construct(Client $client, string $token) {
    $this->_client = $client;
    $this->_token = $token;
  }

  /**
   * @param Endpoint $endpoint
   * @param Authentication $auth
   * @return SFAPIClient
   * @throws FailedToAuthenticate
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public static function connect(Endpoint $endpoint, Authentication $auth): SFAPIClient {
    $client = new Client([
      'base_uri' => $endpoint->getUrl()
    ]);

    return self::connectWith($client, $auth);
  }

  /**
   * @param Client $client
   * @param Authentication $auth
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

    return new SFAPIClient(
      $client,
      $token
    );
  }

  /**
   * @param string $objectType
   * @return ScopedSFAPIClient
   */
  public function scope(string $objectType): ScopedSFAPIClient {
    return new ScopedSFAPIClient($this, $objectType);
  }

  /**
   * @param string $objectType
   * @param array $data
   * @return SFCreationResult
   */
  public function create(string $objectType, array $data): SFCreationResult {
    $result = $this->run(
      new Request(
        'POST',
        $this->o($objectType, ''),
        ['content-type' => 'application/json'],
        ex_json_encode($data)
      )
    );

    if ($result->isError()) {
      return SFCreationResult::err($result->getErr());
    }

    $response = $result->value();

    if ($response && $response instanceof \stdClass) {
      return SFCreationResult::ok(new SFCreation($response));
    }

    return SFCreationResult::err(new \Exception('Failed to handle create response'));
  }

  /**
   * @param string $objectType
   * @param string $id
   * @param array $fields
   * @return SFObjectResult
   */
  public function get(string $objectType, string $id, array $fields = []): SFObjectResult {
    $fieldQuery = empty($fields) ? '' : '?' . implode(',', $fields);
    $result = $this->run(new Request('GET', $this->o($objectType, $id) . $fieldQuery));

    if ($result->isError()) {
      $error = $result->getErr();

      if ($error instanceof RequestException && $error->getResponse() && $error->getResponse()->getStatusCode() === 404) {
        return SFObjectResult::ok(null);
      }

      return SFObjectResult::err($result->getErr());
    }

    $response = $result->value();

    if ($response && $response instanceof \stdClass) {
      return SFObjectResult::ok(new SFObject($response));
    }

    return SFObjectResult::err(new \Exception('Failed to handle get response'));
  }

  /**
   * @param string $objectType
   * @param string $id
   * @param array $data
   * @return BoolResult
   */
  public function patch(string $objectType, string $id, array $data): BoolResult {
    $result = $this->run(
      new Request(
        'PATCH',
        $this->o($objectType, $id),
        ['content-type' => 'application/json'],
        ex_json_encode($data)
      )
    );

    if ($result->isError()) {
      return BoolResult::err($result->getErr());
    }

    if ($result->value() === null) {
      return BoolResult::ok(true);
    }

    return BoolResult::ok(false);
  }

  /**
   * @param string $objectType
   * @param string $id
   * @return BoolResult
   */
  public function delete(string $objectType, string $id): BoolResult {
    $result = $this->run(
      new Request(
        'PATCH',
        $this->o($objectType, $id)
      )
    );

    if ($result->isError()) {
      return BoolResult::err($result->getErr());
    }

    if ($result->value() === null) {
      return BoolResult::ok(true);
    }

    return BoolResult::ok(false);
  }

  /**
   * @param string $query
   * @return SFRecordsResult
   */
  public function query(string $query): SFRecordsResult {
    $result = $this->run(new Request('GET', 'query?q=' . urlencode($query)));

    if ($result->isError()) {
      return SFRecordsResult::err($result->getErr());
    }

    $response = $result->value();

    if ($response && $response instanceof \stdClass) {
      return SFRecordsResult::ok(new SFRecords($response));
    }

    return SFRecordsResult::err(new \Exception('Failed to handle query response'));
  }

  /**
   * @param string $objectType
   * @param string $id
   * @return string
   */
  public function o(string $objectType, string $id = ''): string {
    return self::OBJECT_API . "/{$objectType}" . ($id ? "/${id}" : '');
  }

  /**
   * @param Request $request
   * @return Request
   */
  public function authenticatedRequest(Request $request): Request {

    /**
     * withAddedHeader belongs to MessageTrait. PHPDoc to hint the returned
     * value is of the same type as the initial value.
     *
     * @var Request $req
     */
    $req = $request->withAddedHeader('Authorization', "Bearer {$this->_token}");

    return $req;
  }

  /**
   * @param Request $request
   * @return Result
   */
  public function run(Request $request): Result {
    try {
      return Result::ok($this->_send(
        $this->authenticatedRequest($request)
      ));
    } catch (\Exception $e) {
      return Result::err($e);
    }
  }

  /**
   * @param Request $request
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  protected function _send(Request $request) {
    $body = $this->_client->send($request)->getBody();

    if ($body && $body->getContents() === "") {
      return null;
    }

    return ex_json_decode($body);
  }
}