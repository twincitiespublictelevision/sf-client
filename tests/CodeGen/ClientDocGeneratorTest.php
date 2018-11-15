<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ClientDocGeneratorTest extends TestCase {
  public function fixtures() {
    return require __DIR__ . DS . '..' . DS . '..' . DS . 'codegen' . DS . 'GenerateClientMethodDocs.php';
  }

  public function testGeneratesSalesForceObjectDocs() {
    list($gen, $_) = $this->fixtures();

    $docs = " * @method SFCreationResult createObjectType(array \$data)
 * @method SFObjectResult getObjectType(string \$id, array \$fields = [])
 * @method BoolResult patchObjectType(string \$id, array \$data)
 * @method BoolResult deleteObjectType(string \$id)\n";

    $this->assertEquals($docs, $gen('ObjectType'));
  }
}