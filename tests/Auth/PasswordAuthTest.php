<?php

namespace Tests;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SFClient\Auth\PasswordAuth;

class PasswordAuthTest extends TestCase {
  public function testCreatesRequest() {
    $auth = new PasswordAuth('key', 'secret', 'user', 'pass');
    $params = [];
    parse_str($auth->getTokenRequest()->getBody()->getContents(), $params);

    $this->assertEquals('password', $params['grant_type']);
    $this->assertEquals('key', $params['client_id']);
    $this->assertEquals('secret', $params['client_secret']);
    $this->assertEquals('user', $params['username']);
    $this->assertEquals('pass', $params['password']);
  }

  public function testExtractsTokenFromValidResponse() {
    $auth = new PasswordAuth('key', 'secret', 'user', 'pass');
    $response = new Response(200, [], '{"access_token":"abcde-12345"}');
    $this->assertEquals('abcde-12345', $auth->getTokenFromResponse($response));
  }

  public function testFailsToGetTokenFromInvalidResponse() {
    $auth = new PasswordAuth('key', 'secret', 'user', 'pass');
    $response = new Response(200, [], '[]');
    $this->assertNull($auth->getTokenFromResponse($response));
  }

  public function testHandlesInvalidJSON() {
    $auth = new PasswordAuth('key', 'secret', 'user', 'pass');
    $response = new Response(200, [], 'awogiaweopgijaweg');
    $this->assertNull($auth->getTokenFromResponse($response));
  }
}