<?php

namespace SFClient\SalesForce;

/**
 * Class SFRecords
 *
 * A collection of SalesForce Objects. This collection may only contain a
 * partial set of the total objects in SalesForce.
 *
 * @package SFClient\SalesForce
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
   * @var string|null
   */
  protected $_moreUrl;

  /**
   * SFRecords constructor.
   *
   * Requires the $data argument to contain specific properties:
   * * int totalSize
   * * bool done
   * * array records
   *
   * @param \stdClass $data A successful response object from SalesForce
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
    $this->_moreUrl = $data->nextRecordsUrl ?? null;
  }

  /**
   * Returns the total number of objects in SalesForce that this partial
   * collection was taken from.
   *
   * @return int
   */
  public function getTotal(): int {
    return $this->_total;
  }

  /**
   * Returns true if there are more objects in SalesForce to fetch.
   *
   * @return bool
   */
  public function hasMore(): bool {
    return !$this->_done;
  }

  /**
   * If there are more object in SalesForce to fetch, this returns a uri to
   * retrieve them by. If all records have been returned, this method returns
   * null instead.
   *
   * @return null|string
   */
  public function getNextRecordsUrl(): ?string {
    return $this->_moreUrl;
  }

  /**
   * Returns an array of SFObjects representing records returned by the
   * SalesForce API.
   *
   * @return SFObject[]
   */
  public function getRecords(): array {
    return array_map(function($record) {
      return new SFObject($record);
    }, $this->_records);
  }

  /**
   * Returns the raw elements underlying this set of records. May return an
   * array of arrays or an array of \stdClass. Use this method with caution.
   *
   * @return array
   */
  public function getRecordsRaw(): array {
    return $this->_records;
  }
}