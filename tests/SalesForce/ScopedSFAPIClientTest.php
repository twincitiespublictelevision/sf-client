<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\SalesForce\ScopedSFAPIClient;
use SFClient\SalesForce\SFAPIClient;

class ScopedSFAPIClientTest extends TestCase {
  public function fixture() {
    $client = $this->getMockBuilder(SFAPIClient::class)
      ->disableOriginalConstructor()
      ->getMock();

    return [$client];
  }

  public function testProxiesCreate() {
    list($client) = $this->fixture();

    $res = SFCreationResult::err(new \Exception('Test return'));

    $client->expects($this->once())
      ->method('create')
      ->with('testType', ['key' => 'value'])
      ->willReturn($res);

    $scoped = new ScopedSFAPIClient($client, 'testType');
    $this->assertEquals($res, $scoped->create(['key' => 'value']));
  }

  public function testProxiesGet() {
    list($client) = $this->fixture();

    $res = SFObjectResult::err(new \Exception('Test return'));

    $client->expects($this->once())
      ->method('get')
      ->with('testType', 'id')
      ->willReturn($res);

    $scoped = new ScopedSFAPIClient($client, 'testType');
    $this->assertEquals($res, $scoped->get('id'));
  }

  public function testProxiesPatch() {
    list($client) = $this->fixture();

    $res = BoolResult::err(new \Exception('Test return'));

    $client->expects($this->once())
      ->method('patch')
      ->with('testType', 'id', ['key' => 'value'])
      ->willReturn($res);

    $scoped = new ScopedSFAPIClient($client, 'testType');
    $this->assertEquals($res, $scoped->patch('id', ['key' => 'value']));
  }

  public function testProxiesDelete() {
    list($client) = $this->fixture();

    $res = BoolResult::err(new \Exception('Test return'));

    $client->expects($this->once())
      ->method('delete')
      ->with('testType', 'id')
      ->willReturn($res);

    $scoped = new ScopedSFAPIClient($client, 'testType');
    $this->assertEquals($res, $scoped->delete('id'));
  }
}