<?php

namespace SFClient\Auth;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * Interface Authentication
 * @package SFClient\Auth
 * @internal
 */
interface Authentication {
  public function getTokenRequest(): Request;
  public function getTokenFromResponse(Response $response): ?string;
}