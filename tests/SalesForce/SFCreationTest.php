<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\SalesForce\SFCreation;

class SFCreationTest extends TestCase {
  public function testRequiresId() {
    $this->expectException(\InvalidArgumentException::class);
    new SFCreation(json_decode('{"success": true, "errors": []}'));
  }

  public function testRequiresStatus() {
    $this->expectException(\InvalidArgumentException::class);
    new SFCreation(json_decode('{"id": "12345", "errors": []}'));
  }

  public function testRequiresErrors() {
    $this->expectException(\InvalidArgumentException::class);
    new SFCreation(json_decode('{"id": "12345", "success": true}'));
  }

  public function testGetId() {
    $record = new SFCreation(json_decode('{"id": "12345", "success": true, "errors": ["Some kind of error"]}'));
    $this->assertEquals("12345", $record->getId());
  }

  public function testGetStatus() {
    $record = new SFCreation(json_decode('{"id": "12345", "success": true, "errors": ["Some kind of error"]}'));
    $this->assertTrue($record->wasSuccessful());
  }

  public function testGetErrors() {
    $record = new SFCreation(json_decode('{"id": "12345", "success": true, "errors": ["Some kind of error"]}'));
    $this->assertEquals(["Some kind of error"], $record->getErrors());
  }
}