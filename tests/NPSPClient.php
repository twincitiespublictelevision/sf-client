<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\NPSPClient;
use SFClient\SalesForce\SFAPIClient;

class NPSPClientTest extends TestCase {
  public function testParsesCallsToStandardObjectTypes() {
    $type = array_keys(require implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'src', 'SalesForce', 'NPSPObjectTypes.php']));

    $sfClient = $this->getMockBuilder(SFAPIClient::class)
      ->disableOriginalConstructor()
      ->getMock();

    $client = new NPSPClient($sfClient);

    foreach ($type as $t) {
      foreach (['create', 'get', 'patch', 'delete'] as $method) {
        $this->assertEquals([$method, $t], $client->getRESTParts("$method$t"));
      }
    }
  }
}