<?php

namespace SFClientCodeGen;

use const SFClient\DS;

$gen = function($type) {
  return " * @method SFCreationResult create{$type}(array \$data)
 * @method SFObjectResult get{$type}(string \$id, array \$fields = [])
 * @method BoolResult patch{$type}(string \$id, array \$data)
 * @method BoolResult delete{$type}(string \$id)\n";
};



$write = function($classPath, $types) use ($gen) {
  $template = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'ClientDocs.tmpl');
  $typeDocs = implode('', array_map($gen, array_keys($types)));

  $clientDocs = preg_replace('/<D>/', rtrim($typeDocs), $template);
  $clientClass = file_get_contents($classPath);

  $class = substr($classPath, strrpos($classPath, DIRECTORY_SEPARATOR) + 1, -4);

  return file_put_contents(
    $classPath,
    preg_replace(
      '/<C>/',
      $class,
      preg_replace('/ \* @package SFClient[\s\S]+?\*\//', $clientDocs, $clientClass, 1)
    )
  );
};

return [$gen, $write];