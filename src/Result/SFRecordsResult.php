<?php

namespace SFClient\Result;

use SFClient\Result\Result;
use SFClient\SalesForce\SFRecords;

/**
 * Class SFRecordsResult
 * @package SFClient\Result
 */
class SFRecordsResult {

  /**
   * @var Result
   */
  protected $_res;

  /**
   * SFRecords constructor.
   * @param Result $res
   */
  public function __construct(Result $res) {
      $this->res = $res;
  }

  /**
   * @param SFRecords $value
   * @return SFRecordsResult
   * @see Result::ok()
   */
  public static function ok(SFRecords $value): SFRecordsResult {
      return new SFRecordsResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return SFRecordsResult
   * @see Result::err()
   */
  public static function err(\Exception $err): SFRecordsResult {
      return new SFRecordsResult(Result::err($err));
  }

  /**
   * @return bool
   * @see Result::isOk()
   */
  public function isOk(): bool {
      return $this->res->isOk();
  }

  /**
   * @return bool
   * @see Result::isError()
   */
  public function isError(): bool {
      return $this->res->isError();
  }

  /**
   * @return SFRecords
   * @throws \Exception
   * @see Result::value()
   */
  public function value(): SFRecords {
      return $this->res->value();
  }

  /**
   * @return \Exception
   * @see Result::getErr()
   */
  public function getErr(): \Exception {
      return $this->res->getErr();
  }

  /**
   * @param $fallback
   * @return mixed
   * @see Result::valueOr()
   */
  public function valueOr($fallback) {
      return $this->res->valueOr($fallback);
  }
}
