<?php

namespace SFClient\Result;

use SFClient\Result\Result;

/**
 * Class BoolResult
 * @package SFClient\Result
 */
class BoolResult {

  /**
   * @var Result
   */
  protected $_res;

  /**
   * Bool constructor.
   * @param Result $res
   */
  public function __construct(Result $res) {
      $this->res = $res;
  }

  /**
   * @param bool $value
   * @return BoolResult
   */
  public static function ok(bool $value): BoolResult {
      return new BoolResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return BoolResult
   */
  public static function err(\Exception $err): BoolResult {
      return new BoolResult(Result::err($err));
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
   * @return bool
   * @throws \Exception
   */
  public function value(): bool {
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
