<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SFClient\Element;

class ElementTest extends TestCase {
  public function testUndefinedPropsReturnNull() {
    $el = new Element(json_decode('{}'));
    $this->assertNull($el->fakeProp);
  }

  public function testObjectPropsReturnElement() {
    $el = new Element(json_decode('{"key": {"sub_key": "value"}}'));
    $this->assertInstanceOf(Element::class, $el->key);
    $this->assertEquals('value', $el->key->sub_key);
  }

  public function testNonObjectPropsReturnRaw() {
    $el = new Element(json_decode('{"key": 5}'));
    $this->assertEquals(5, $el->key);
  }

  public function testObjectsInArrayPropsAreMappedRecursivelyToRaw() {
    $doc = '{"key": [5, "string", false, {"sub_key": "value"}, [{"sub_sub_key": "sub_value"}]]}';
    $el = new Element(json_decode($doc));

    $this->assertInternalType('array', $el->key);
    $this->assertInstanceOf(Element::class, $el->key[3]);
    $this->assertInternalType('array', $el->key[4]);
    $this->assertInstanceOf(Element::class, $el->key[4][0]);
    $this->assertEquals('sub_value', $el->key[4][0]->sub_sub_key);
  }
}