<?php
  
namespace SFClient\Result;

use SFClient\Result\Result;
use SFClient\SalesForce\SFObject;

/**
 * Class SFObjectResult
 * @package SFClient\Result
 */
class SFObjectResult {

  /**
   * @var Result
   */
  protected $_res;

  /**
   * SFObject constructor.
   * @param Result $res
   */
  public function __construct(Result $res) {
      $this->res = $res;
  }

  /**
   * @param SFObject|null $value
   * @return SFObjectResult
   */
  public static function ok(?SFObject $value): SFObjectResult {
      return new SFObjectResult(Result::ok($value));
  }

  /**
   * @param \Exception $err
   * @return SFObjectResult
   */
  public static function err(\Exception $err): SFObjectResult {
      return new SFObjectResult(Result::err($err));
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
   * @return SFObject|null
   * @throws \Exception
   */
  public function value(): ?SFObject {
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
