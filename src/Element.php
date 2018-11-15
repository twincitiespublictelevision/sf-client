<?php

namespace SFClient;

/**
 * Class Element
 *
 * Wrapper class for stdClass that helps make accessing arbitrary
 * properties safer
 *
 * @package SalesForce
 */
class Element {

  /**
   * @var \stdClass
   */
  protected $_data;

  /**
   * Element constructor.
   * @param \stdClass $data
   */
  public function __construct(\stdClass $data) {
    $this->_data = $data;
  }

  /**
   * @param string $name
   * @return bool
   * @internal
   */
  public function __isset($name) {
    return isset($this->_data) && isset($this->_data->{$name});
  }

  /**
   * @param string $name
   * @return mixed
   * @internal
   */
  public function __get($name) {
    if (isset($this->{$name})) {
      return $this->_wrap($this->_data->$name);
    }

    return null;
  }

  /**
   * @param mixed $elem
   * @return mixed
   */
  protected function _wrap($elem) {
    if ($elem instanceof \stdClass) {
      return new Element($elem);
    } elseif (is_array($elem)) {
      return array_map(
        function ($e) { return $this->_wrap($e); },
        $elem
      );
    }

    return $elem;
  }
}