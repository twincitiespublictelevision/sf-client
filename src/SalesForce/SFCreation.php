<?php

namespace SFClient\SalesForce;

/**
 * Class SFCreation
 * @package SalesForce
 */
class SFCreation {

  /**
   * @var string
   */
  protected $_id;

  /**
   * @var bool
   */
  protected $_success;

  /**
   * @var array
   */
  protected $_errors;

  public function __construct(\stdClass $data) {
    if (!isset($data->id)) {
      throw new \InvalidArgumentException('Data is missing an id property.');
    }

    if (!isset($data->success)) {
      throw new \InvalidArgumentException('Data is messing a success property.');
    }

    if (!isset($data->errors)) {
      throw new \InvalidArgumentException('Data is missing an errors property.');
    }

    $this->_id = $data->id;
    $this->_success = (bool) $data->success;
    $this->_errors = $data->errors;
  }

  /**
   * @return string
   */
  public function getId(): string {
    return $this->_id;
  }

  /**
   * @return bool
   */
  public function wasSuccessful(): bool {
    return $this->_success;
  }

  /**
   * @return array
   */
  public function getErrors(): array {
    return $this->_errors;
  }
}