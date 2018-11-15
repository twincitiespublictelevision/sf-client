<?php

namespace SFClientCodeGen;

const DS = DIRECTORY_SEPARATOR;

return function() {
  $clientClassPath = implode(DS, [__DIR__, '..', 'src', 'Client.php']);

  function genMethods($type) {
    return " * @method SFCreationResult create{$type}(array \$data)
 * @method SFObjectResult get{$type}(string \$id, array \$fields = [])
 * @method BoolResult patch{$type}(string \$id, array \$data)
 * @method BoolResult delete{$type}(string \$id)\n";
  }

  $template = file_get_contents(__DIR__ . DS . 'ClientDocs.tmpl');

  $types = require_once implode(DS, [__DIR__, '..', 'src', 'SalesForce', 'ObjectTypes.php']);
  $typeDocs = implode(
    array_map(
      function($t) {
        return genMethods($t);
      },
      $types
    )
  );

  $clientDocs = preg_replace('/<D>/', rtrim($typeDocs), $template);
  $clientClass = file_get_contents($clientClassPath);

  return file_put_contents(
    $clientClassPath,
    preg_replace('/\/\*\*[\s\S]+?\*\//', $clientDocs, $clientClass, 1)
  );
};