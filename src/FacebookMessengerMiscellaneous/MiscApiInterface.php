<?php

namespace FacebookMessengerMiscellaneous;

/**
 * Interface MiscApiInterface.
 *
 * Base interface to any handler.
 */
interface MiscApiInterface {

  /**
   * The address of the end point which the handler need to interact with.
   */
  const ADDRESS = '';

  /**
   * Set the access token.
   *
   * @param string $access_token
   *   The access token.
   *
   * @return MiscApiInterface
   */
  public function setAccessToken($access_token);

  /**
   * Set the request to the api.
   *
   * @return mixed
   *   The decoded response.
   */
  public function send();

}
