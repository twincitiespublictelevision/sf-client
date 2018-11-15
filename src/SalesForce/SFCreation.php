<?php

namespace SFClient\SalesForce;

/**
 * Class SFCreation
 *
 * Represents an object create response from SalesForce.
 *
 * @package SFClient\SalesForce
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

  /**
   * SFCreation constructor.
   *
   * Requires the $data argument to contain specific properties:
   * * string id
   * * bool success
   * * array errors
   *
   * @param \stdClass $data A successful create response object from SalesForce
   */
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