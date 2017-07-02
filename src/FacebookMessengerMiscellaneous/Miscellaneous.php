<?php

namespace FacebookMessengerMiscellaneous;

use FacebookMessengerMiscellaneous\Miscellaneous\MessengerProfileApi;
use FacebookMessengerMiscellaneous\Miscellaneous\UserProfile;

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

}
