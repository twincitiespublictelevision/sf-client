<?php

namespace SFClientCodeGen;

$classTemplate = (function($template) {
  return function($ns, $path, $class) use ($template) {
    $res = $template;
    $res = preg_replace('/<N>/', $ns, $res);
    $res = preg_replace('/<P>/', $path, $res);
    $res = preg_replace('/<T>/', $class, $res);

    return $res;
  };
})(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'Result.php.tmpl'));

$nullableClassTemplate = (function($template) {
  return function($ns, $path, $class) use ($template) {
    $res = $template;
    $res = preg_replace('/<N>/', $ns, $res);
    $res = preg_replace('/<P>/', $path, $res);
    $res = preg_replace('/<T>/', $class, $res);

    return $res;
  };
})(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'OptionalResult.php.tmpl'));

$primitiveTemplate = (function($template) {
  return function($ns, $primitive) use ($template) {
    $class = ucfirst($primitive);

    $res = $template;
    $res = preg_replace('/<N>/', $ns, $res);
    $res = preg_replace('/<t>/', $primitive, $res);
    $res = preg_replace('/<T>/', $class, $res);

    return $res;
  };
})(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'PrimitiveResult.php.tmpl'));

$nullablePrimitiveTemplate = (function($template) {
  return function($ns, $primitive) use ($template) {
    $class = ucfirst($primitive);

    $res = $template;
    $res = preg_replace('/<N>/', $ns, $res);
    $res = preg_replace('/<t>/', $primitive, $res);
    $res = preg_replace('/<T>/', $class, $res);

    return $res;
  };
})(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'OptionalPrimitiveResult.php.tmpl'));

return [
  $classTemplate,
  $nullableClassTemplate,
  $primitiveTemplate,
  $nullablePrimitiveTemplate
];