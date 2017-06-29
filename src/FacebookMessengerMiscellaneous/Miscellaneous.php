<?php

namespace FacebookMessengerMiscellaneous;

use FacebookMessengerMiscellaneous\Miscellaneous\MessengerProfileApi;
use FacebookMessengerMiscellaneous\Miscellaneous\UserProfile;
use GuzzleHttp\Client;

class Miscellaneous {

  /**
   * @var UserProfile
   */
  public $userProfileApi;

  /**
   * @var MessengerProfileApi
   */
  public $messengerProfileApi;

  /**
   * The access token of the app.
   *
   * @var string
   */
  protected $accessToken;

  /**
   * Miscellaneous constructor.
   */
  public function __construct() {
    $this->userProfileApi = new UserProfile();
    $this->messengerProfileApi = new MessengerProfileApi();
  }

  /**
   * Get the access token.
   *
   * @return string
   *   The access token of the app.
   */
  public function getAccessToken() {
    return $this->accessToken;
  }

  /**
   * Set the access token.
   *
   * @param string $accessToken
   *   The access token of the app.
   *
   * @return Miscellaneous
   *   The current instance.
   */
  public function setAccessToken($accessToken) {
    $this->accessToken = $accessToken;

    return $this;
  }

  /**
   * Sending a message.
   *
   * @param MiscellaneousTransform $miscellaneous
   *   The text is self or an array matching the send API.
   *
   * @return \Psr\Http\Message\ResponseInterface
   */
  public function send(MiscellaneousTransform $miscellaneous) {

    $options = [
      'form_params' => $miscellaneous->getData(),
    ];

    $client = new Client();

    return $client->post($miscellaneous::ADDRESS . '?access_token=' . $this->accessToken, $options);
  }

}
