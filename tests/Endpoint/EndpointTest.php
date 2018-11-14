<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\Endpoint\Endpoint;

class EndpointTest extends TestCase {
  public function testBuildsEndpointString() {
    $endpoint = new Endpoint('https://localhost', '23.4');
    $this->assertEquals('https://localhost/services/data/v23.4/', $endpoint->getUrl());
  }
}