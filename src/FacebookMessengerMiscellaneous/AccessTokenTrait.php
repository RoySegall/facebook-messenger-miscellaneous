<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

/**
 * Access token trait.
 */
trait AccessTokenTrait {

  /**
   * The string of the access token.
   *
   * @var string
   */
  protected $accessToken;

  /**
   * Set the access token.
   *
   * @param string $access_token
   *   The access token.
   *
   * @return $this
   */
  public function setAccessToken($access_token) {
    $this->accessToken = $access_token;

    return $this;
  }

}
