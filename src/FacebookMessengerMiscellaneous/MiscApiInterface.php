<?php

namespace FacebookMessengerMiscellaneous;

/**
 * Interface MiscApiInterface.
 *
 * Base interface to any handler.
 */
interface MiscApiInterface {

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
   * @param MiscellaneousTransform $payload
   *   The sent payload.
   *
   * @return mixed
   *   The decoded response.
   */
  public function send(MiscellaneousTransform $payload = NULL);

}
