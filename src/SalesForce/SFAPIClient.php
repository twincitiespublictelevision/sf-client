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
 * Class SFAPIClient
 *
 * A general purpose client for communicating with the SalesForce API. This
 * client only implements the base functionality for handling CRUD operations as
 * where as arbitrary query execution.
 *
 * On construction a client will attempt to authenticate against the supplied
 * SalesForce endpoint immediately. An exception will be thrown if this call
 * is not successful. At this point the returned token is stored for later use,
 * and the credentials for authentication are thrown away.
 *
 * The client will not attempt to re-authenticate if later API calls generate
 * authentication failures. If the client is left in use by a long running
 * process that outlives the lifetime of the access token, then this case may
 * occur. It is left to the consumer of the client to handle these cases.
 *
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
   * Constructs a new SalesForce API client with a given SalesForce API endpoint
   * and authentication mechanism.
   *
   * @param Endpoint $endpoint SalesForce endpoint to make calls against
   * @param Authentication $auth SalesForce authentication mechanism
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
   * Constructs a new SalesForce API client with a custom Http client and the
   * given authentication mechanism.
   *
   * It is expected that the caller has correctly configured the Http client
   * ahead of time with the appropriate
   * SalesForce base endpoint url.
   * ```php
   * $auth = new PasswordAuth(
   *   'key',
   *   'secret',
   *   'user',
   *   'pass'
   * );
   *
   * $client = new Client([
   *   'base_uri' => 'https://my.endpoint.salesforce.com/services/data/v12.3/
   * ]);
   *
   * $sfClient = SFAPIClient::connectWith($client, $auth);
   * ```
   *
   * @param Client $client Http client that will be used by the SFAPIClient to communicate with the SalesForce API
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

    return new SFAPIClient(
      $client,
      $token
    );
  }

  /**
   * Constructs a new SalesForce API client that is scoped to a specific object
   * type.
   *
   * Note that this re-uses the Http client of the SalesForce API client
   * that was used to create the scoped client. Object types passed to the
   * method are not validated in any way.
   * ```php
   * $contacts = $client->scope('Contact');
   * ```
   *
   * @param string $objectType SalesForce object type to create a client for
   * @return ScopedSFAPIClient
   */
  public function scope(string $objectType): ScopedSFAPIClient {
    return new ScopedSFAPIClient($this, $objectType);
  }

  /**
   * Performs a create operation for a given type.
   *
   * @param string $objectType SalesForce object type to create
   * @param array $data Field data to create the object with
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
   * Fetches a single object of a given type.
   *
   * The optional `$fields` argument may be used to restrict the fields that
   * are returned. By default all fields are returned.
   *
   * @param string $objectType SalesForce object type to query for
   * @param string $id SalesForce object id to query for
   * @param array $fields SalesForce fields to return
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
   * Updates a single object of a given type with the given id.
   *
   * @param string $objectType SalesForce object type to update
   * @param string $id SalesForce id type to update
   * @param array $data Field data to update the object with
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
   * Deletes a single object of a given type with the given id.
   *
   * @param string $objectType SalesForce object type to delete
   * @param string $id SalesForce id type to delete
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
   * Performs an arbitrary query against the SalesForce query endpoint and
   * returns the results.
   *
   * The results returned may not represent all of the objects in SalesForce
   * that match the given query. Records up to the limit set by SalesForce are
   * returned.
   *
   * This method runs the provided query as-is and does not perform validation
   * or sanitizion. Consumers of the client should handle these operations prior
   * to passing the query to the client.
   *
   * @param string $query A SOQL query to run
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
   * Helper function for constructing a SalesForce Object REST uri.
   *
   * @param string $objectType
   * @param string $id
   * @return string
   * @internal
   */
  public function o(string $objectType, string $id = ''): string {
    return self::OBJECT_API . "/{$objectType}" . ($id ? "/${id}" : '');
  }

  /**
   * Given an arbitrary request, returns a new request with the client stored
   * authentication information attached.
   *
   * @param Request $request
   * @return Request
   * @internal
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
   * Executes an arbitrary request against the SalesForce API
   *
   * @param Request $request
   * @return Result
   * @internal
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