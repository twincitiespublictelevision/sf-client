<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SFClient\Auth\PasswordAuth;
use SFClient\Result\Result;
use SFClient\Result\SFRecordsResult;
use SFClient\SalesForce\ReconnectingSFAPIClient;
use SFClient\Exceptions\FailedToAuthenticate;

class ReconnectingSFAPIClientTest extends TestCase
{
  public function fixtures() {
    $auth = $this->getMockBuilder(PasswordAuth::class)
      ->disableOriginalConstructor()
      ->getMock();

    $client = $this->getMockBuilder(Client::class)
      ->setConstructorArgs([['base_uri' => 'https://localhost/']])
      ->getMock();

    return [$auth, $client];
  }

  public function testRunHandlesExeceptions() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $error = new RequestException(
      'Request failure',
      new Request('GET', '/'),
      new Response(500, [], '{"message": "server error"}')
    );

    $client->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function () use ($error) {
          throw $error;
        })
      );

    $sf = ReconnectingSFAPIClient::connectWith($client, $auth);

    $this->assertEquals(Result::err($error), $sf->run(new Request('GET', '/')));
  }

  public function testRunAttemptsToReauthenticateOnUnauthorizedFailure() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')->willReturn('12345');

    $error = new ClientException(
      'Request failure',
      new Request('GET', '/'),
      new Response(401, [], '{"message": "server error"}')
    );

    $client->expects($this->exactly(4))
      ->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        }),
        new Response(),
        new Response()
      );

    $sf = ReconnectingSFAPIClient::connectWith($client, $auth);

    $sf->run(new Request('GET', '/'));
  }

  public function testReturnsErrorResultOnAuthenticationFailure() {
    list($auth, $client) = $this->fixtures();

    $auth->method('getTokenFromResponse')
      ->willReturnOnConsecutiveCalls(
        '12345',
        null
      );

    $error = new ClientException(
      'Request failure',
      new Request('GET', '/'),
      new Response(401, [], '{"message": "server error"}')
    );

    $failError = new FailedToAuthenticate();

    $client->expects($this->exactly(3))
      ->method('send')
      ->willReturnOnConsecutiveCalls(
        new Response(),
        $this->returnCallback(function() use ($error) {
          throw $error;
        }),
        new Response()
      );

    $sf = ReconnectingSFAPIClient::connectWith($client, $auth);

    $this->assertEquals(Result::err($failError), $sf->run(new Request('GET', '/')));
  }
}