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
   */
  public static function ok(SFRecords $value): SFRecordsResult {
      return new SFRecordsResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return SFRecordsResult
   */
  public static function err(\Exception $err): SFRecordsResult {
      return new SFRecordsResult(Result::err($err));
  }

  /**
   * @return bool
   */
  public function isOk(): bool {
      return $this->res->isOk();
  }

  /**
   * @return bool
   */
  public function isError(): bool {
      return $this->res->isError();
  }

  /**
   * @return SFRecords
   * @throws \Exception
   */
  public function value(): SFRecords {
      return $this->res->value();
  }

  /**
   * @return \Exception
   */
  public function getErr(): \Exception {
      return $this->res->getErr();
  }

  /**
   * @param $fallback
   * @return mixed
   */
  public function valueOr($fallback) {
      return $this->res->valueOr($fallback);
  }
}
