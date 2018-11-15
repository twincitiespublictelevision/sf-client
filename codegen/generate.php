<?php

namespace SFClientCodeGen;

list(
  $classTemplate,
  $nullableClassTemplate,
  $primitiveTemplate,
  $nullablePrimitiveTemplate
) = require __DIR__ . DIRECTORY_SEPARATOR . 'GenerateResultClasses.php';

$writeDocs = require_once __DIR__ . DIRECTORY_SEPARATOR . 'GenerateClientMethodDocs.php';

function writeClass(string $class, string $code, string $directory) {
  $path = $directory . $class . 'Result.php';

  if ($dir = dirname($path)) {
    if (!file_exists($dir)) {
      mkdir($dir, 0755, true);
    }
  }

  if (file_put_contents($path, $code) === false) {
    return false;
  }

  return $path;
}

$config = [
  ['SFClient\Result', 'SFClient\SalesForce', 'SFCreation', $classTemplate],
  ['SFClient\Result', 'SFClient\SalesForce', 'SFObject', $nullableClassTemplate],
  ['SFClient\Result', 'SFClient\SalesForce', 'SFRecords', $classTemplate],
  ['SFClient\Result', '', 'bool', $primitiveTemplate]
];

$dir = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '/src/Result/';

foreach ($config as $i => $elem) {
  list($ns, $path, $class, $template) = $elem;

  writeClass(ucfirst($class), $template($ns, $path, $class), $dir);
}

$writeDocs();