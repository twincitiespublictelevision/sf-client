<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\Client;
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
}