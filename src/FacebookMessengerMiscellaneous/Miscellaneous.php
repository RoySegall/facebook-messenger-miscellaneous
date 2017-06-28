<?php

namespace FacebookMessengerMiscellaneous;

use FacebookMessengerMiscellaneous\Miscellaneous\UserProfile;

class Miscellaneous {

  /**
   * @var UserProfile
   */
  public $userProfileApi;

  /**
   * Miscellaneous constructor.
   */
  public function __construct() {
    $this->userProfileApi = new UserProfile();
    $this->messengerProfileApi = new MessengerProfileApi();
  }

}
