<?php

namespace SFClientCodeGen;

list(
  $classTemplate,
  $nullableClassTemplate,
  $primitiveTemplate,
  $nullablePrimitiveTemplate
) = require __DIR__ . DIRECTORY_SEPARATOR . 'GenerateResultClasses.php';

list($_, $writeDocs) = require_once __DIR__ . DIRECTORY_SEPARATOR . 'GenerateClientMethodDocs.php';

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


$client = implode(DS, [__DIR__, '..', 'src', 'Client.php']);
$types = require_once implode(DS, [__DIR__, '..', 'src', 'SalesForce', 'ObjectTypes.php']);

$writeDocs($client, $types);

$npspClient = implode(DS, [__DIR__, '..', 'src', 'NPSPClient.php']);
$npspTypes = require_once implode(DS, [__DIR__, '..', 'src', 'SalesForce', 'NPSPObjectTypes.php']);
$totalTypes = array_merge($types, $npspTypes);
ksort($totalTypes);

$writeDocs($npspClient, $totalTypes);
