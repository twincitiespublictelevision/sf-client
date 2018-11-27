<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\Client;
use SFClient\Result\BoolResult;
use SFClient\Result\SFCreationResult;
use SFClient\Result\SFObjectResult;
use SFClient\SalesForce\ScopedSFAPIClient;
use SFClient\SalesForce\SFAPIClient;

class ClientTest extends TestCase {
  public function testParsesCallsToStandardObjectTypes() {
    $type = array_keys(require implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'src', 'SalesForce', 'ObjectTypes.php']));

    $sfClient = $this->getMockBuilder(SFAPIClient::class)
      ->disableOriginalConstructor()
      ->getMock();

    $client = new Client($sfClient);

    foreach ($type as $t) {
      foreach (['create', 'get', 'patch', 'delete'] as $method) {
        $this->assertEquals([$method, $t], $client->getRESTParts("$method$t"));
      }
    }
  }

  public function testSubmitsCallToInnerClient() {
    $types = array_keys(require implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'src', 'SalesForce', 'ObjectTypes.php']));

    $sfClient = $this->getMockBuilder(SFAPIClient::class)
      ->disableOriginalConstructor()
      ->getMock();

    $id = 'id-12345';

    $writeData = [
      'Arg1' => 'Value1',
      'Arg2' => 'Value2'
    ];

    $readFields = ['Field1', 'Field2'];

    $createResult = $this->getMockBuilder(SFCreationResult::class)
      ->disableOriginalConstructor()
      ->getMock();

    $getResult = $this->getMockBuilder(SFObjectResult::class)
      ->disableOriginalConstructor()
      ->getMock();

    $patchResult = $this->getMockBuilder(BoolResult::class)
      ->disableOriginalConstructor()
      ->getMock();

    $deleteResult = $this->getMockBuilder(BoolResult::class)
      ->disableOriginalConstructor()
      ->getMock();

    $scopedMock = function() use (
      $writeData, $id, $readFields,
      $createResult, $getResult, $patchResult, $deleteResult
    ) {
      $mock = $this->getMockBuilder(ScopedSFAPIClient::class)
        ->disableOriginalConstructor()
        ->getMock();

      $mock->expects($this->once())
        ->method('create')
        ->with($writeData)
        ->willReturn($createResult);

      $mock->expects($this->once())
        ->method('get')
        ->with($id, $readFields)
        ->willReturn($getResult);

      $mock->expects($this->once())
        ->method('patch')
        ->with($id, $writeData)
        ->willReturn($patchResult);

      $mock->expects($this->once())
        ->method('delete')
        ->with($id)
        ->willReturn($deleteResult);

      return $mock;
    };

    $with = [];
    $rets = [];

    foreach ($types as $t) {
      $m = $scopedMock();

      $with[] = [$t]; // create
      $rets[] = $m;

      $with[] = [$t]; // get
      $rets[] = $m;

      $with[] = [$t]; // patch
      $rets[] = $m;

      $with[] = [$t]; // delete
      $rets[] = $m;
    }

    $sfClient->method('scope')
      ->withConsecutive(...$with)
      ->willReturnOnConsecutiveCalls(...$rets);

    $client = new Client($sfClient);

    foreach ($types as $t) {
      $this->assertInstanceOf(SFCreationResult::class, $client->{"create$t"}($writeData));
      $this->assertInstanceOf(SFObjectResult::class, $client->{"get$t"}($id, $readFields));
      $this->assertInstanceOf(BoolResult::class, $client->{"patch$t"}($id, $writeData));
      $this->assertInstanceOf(BoolResult::class, $client->{"delete$t"}($id));
    }
  }
}