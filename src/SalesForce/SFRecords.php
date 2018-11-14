<?php

namespace SFClient\SalesForce;

/**
 * Class SFRecords
 * @package SalesForce
 */
class SFRecords {

  /**
   * @var int
   */
  protected $_total;

  /**
   * @var bool
   */
  protected $_done;

  /**
   * @var array
   */
  protected $_records;

  /**
   * SFRecords constructor.
   * @param \stdClass $data
   */
  public function __construct(\stdClass $data) {
    if (!isset($data->totalSize)) {
      throw new \InvalidArgumentException('Data is missing a total size property');
    }

    if (!isset($data->done)) {
      throw new \InvalidArgumentException('Data is missing a done property');
    }

    if (!isset($data->records)) {
      throw new \InvalidArgumentException('Data is missing a records property');
    }

    $this->_total = (int) $data->totalSize;
    $this->_done = (bool) $data->done;
    $this->_records = $data->records;
  }

  /**
   * @return int
   */
  public function getTotal(): int {
    return $this->_total;
  }

  /**
   * @return bool
   */
  public function hasMore(): bool {
    return !$this->_done;
  }

  /**
   * @return SFObject[]
   */
  public function getRecords(): array {
    return array_map(function($record) {
      return new SFObject($record);
    }, $this->_records);
  }
}