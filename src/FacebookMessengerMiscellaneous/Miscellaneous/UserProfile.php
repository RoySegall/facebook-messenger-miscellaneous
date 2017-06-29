<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

use FacebookMessengerMiscellaneous\MiscellaneousTransform;

class UserProfile extends MiscellaneousTransform {

  const ADDRESS = 'https://graph.facebook.com/v2.6/me/messages';

  public function setUserID($user_id) {
    $this->data['user_id'] = $user_id;

    return $user_id;
  }

}
