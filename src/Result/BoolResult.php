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
   * @see Result::ok()
   */
  public static function ok(bool $value): BoolResult {
      return new BoolResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return BoolResult
   * @see Result::err()
   */
  public static function err(\Exception $err): BoolResult {
      return new BoolResult(Result::err($err));
  }

  /**
   * @return bool
   * @see Result::isOK()
   */
  public function isOk(): bool {
      return $this->res->isOk();
  }

  /**
   * @return bool
   * @see Result::Error()
   */
  public function isError(): bool {
      return $this->res->isError();
  }

  /**
   * @return bool
   * @throws \Exception
   * @see Result::value()
   */
  public function value(): bool {
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
