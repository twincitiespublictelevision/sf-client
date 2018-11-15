<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

const DS = DIRECTORY_SEPARATOR;

class Foo {}

class ResultGeneratorTest extends TestCase {
  public function fixtures() {
    return require __DIR__ . DS . '..' . DS . '..' . DS . 'codegen' . DS . 'GenerateResultClasses.php';
  }

  /**
   * @runInSeparateProcess
   */
  public function testGeneratesClassResult() {
    list($classTemplate, $_, $_, $_) = $this->fixtures();

    eval('?>' . $classTemplate('Tests', 'Tests', 'Foo'));

    $okTest = FooResult::ok(new Foo());
    $errTest = FooResult::err(new \Exception('IsError'));

    $this->assertTrue($okTest->isOk());
    $this->assertFalse($errTest->isOk());

    $this->assertFalse($okTest->isError());
    $this->assertTrue($errTest->isError());

    $this->assertInstanceOf(Foo::class, $okTest->value());
    $this->assertEquals(new \Exception('IsError'), $errTest->getErr());

    $this->assertInstanceOf(Foo::class, $okTest->valueOr(null));
    $this->assertNull($errTest->valueOr(null));
  }

  /**
   * @runInSeparateProcess
   */
  public function testGeneratesOptionalClassResult() {
    list($_, $nullableClassTemplate, $_, $_) = $this->fixtures();

    eval('?>' . $nullableClassTemplate('Tests', 'Tests', 'Foo'));

    $okTest = FooResult::ok(new Foo());
    $nullTest = FooResult::ok(null);
    $errTest = FooResult::err(new \Exception('IsError'));

    $this->assertTrue($okTest->isOk());
    $this->assertFalse($errTest->isOk());

    $this->assertFalse($okTest->isError());
    $this->assertTrue($errTest->isError());

    $this->assertInstanceOf(Foo::class, $okTest->value());
    $this->assertEquals(new \Exception('IsError'), $errTest->getErr());

    $this->assertInstanceOf(Foo::class, $okTest->valueOr(null));
    $this->assertNull($errTest->valueOr(null));

    $this->assertNull($nullTest->value());
  }

  /**
   * @runInSeparateProcess
   */
  public function testGeneratesPrimitiveResult() {
    list($_, $_, $primitiveTemplate, $_) = $this->fixtures();

    eval('?>' . $primitiveTemplate('Tests', '', 'bool'));

    $okTest = BoolResult::ok(5);
    $errTest = BoolResult::err(new \Exception('IsError'));

    $this->assertTrue($okTest->isOk());
    $this->assertFalse($errTest->isOk());

    $this->assertFalse($okTest->isError());
    $this->assertTrue($errTest->isError());

    $this->assertInternalType('bool', $okTest->value());
    $this->assertEquals(new \Exception('IsError'), $errTest->getErr());

    $this->assertInternalType('bool', $okTest->valueOr(null));
    $this->assertNull($errTest->valueOr(null));
  }

  /**
   * @runInSeparateProcess
   */
  public function testGeneratesOptionalPrimitiveResult() {
    list($_, $_, $_, $nullablePrimitiveTemplate) = $this->fixtures();

    eval('?>' . $nullablePrimitiveTemplate('Tests', '', 'int'));

    $okTest = IntResult::ok(5);
    $nullTest = IntResult::ok(null);
    $errTest = IntResult::err(new \Exception('IsError'));

    $this->assertTrue($okTest->isOk());
    $this->assertFalse($errTest->isOk());

    $this->assertFalse($okTest->isError());
    $this->assertTrue($errTest->isError());

    $this->assertInternalType('int', $okTest->value());
    $this->assertEquals(new \Exception('IsError'), $errTest->getErr());

    $this->assertInternalType('int', $okTest->valueOr(null));
    $this->assertNull($errTest->valueOr(null));

    $this->assertNull($nullTest->value());
  }
}