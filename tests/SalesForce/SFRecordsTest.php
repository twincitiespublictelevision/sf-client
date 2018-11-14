<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\SalesForce\SFObject;
use SFClient\SalesForce\SFRecords;

class SFRecordsTest extends TestCase {
  public function testRequiresTotal() {
    $this->expectException(\InvalidArgumentException::class);
    new SFRecords(json_decode('{"done": true, "records": []}'));
  }

  public function testRequiresDone() {
    $this->expectException(\InvalidArgumentException::class);
    new SFRecords(json_decode('{"totalSize": 12345, "records": []}'));
  }

  public function testRequiresRecords() {
    $this->expectException(\InvalidArgumentException::class);
    new SFRecords(json_decode('{"totalSize": 12345, "done": true}'));
  }

  public function testGetTotal() {
    $records = new SFRecords(json_decode('{"totalSize": 12345, "done": true, "records": []}'));
    $this->assertEquals(12345, $records->getTotal());
  }

  public function testIsDone() {
    $records = new SFRecords(json_decode('{"totalSize": 12345, "done": true, "records": []}'));
    $this->assertFalse($records->hasMore());
  }

  public function testGetObjects() {
    $records = new SFRecords(json_decode('{"totalSize": 12345, "done": true, "records": [{"name": "test", "email": "test@tpt.cloud"}]}'));

    $data = new \stdClass();
    $data->name = "test";
    $data->email = "test@tpt.cloud";

    $object = new SFObject($data);

    $this->assertEquals([$object], $records->getRecords());
  }
}