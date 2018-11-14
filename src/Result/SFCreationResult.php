<?php

namespace SFClient\Result;

use SFClient\Result\Result;
use SFClient\SalesForce\SFCreation;

/**
 * Class SFCreationResult
 * @package SFClient\Result
 */
class SFCreationResult {

  /**
   * @var Result
   */
  protected $_res;

  /**
   * SFCreation constructor.
   * @param Result $res
   */
  public function __construct(Result $res) {
      $this->res = $res;
  }

  /**
   * @param SFCreation $value
   * @return SFCreationResult
   */
  public static function ok(SFCreation $value): SFCreationResult {
      return new SFCreationResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return SFCreationResult
   */
  public static function err(\Exception $err): SFCreationResult {
      return new SFCreationResult(Result::err($err));
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
   * @return SFCreation
   * @throws \Exception
   */
  public function value(): SFCreation {
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
