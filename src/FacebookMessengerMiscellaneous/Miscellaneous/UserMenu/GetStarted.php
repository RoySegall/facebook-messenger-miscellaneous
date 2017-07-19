<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous\UserMenu;

use FacebookMessengerMiscellaneous\MiscellaneousTransform;
use FacebookMessengerMiscellaneous\MiscellaneousTransformInterface;

/**
 * Class GetStarted
 *
 * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/get-started-button
 */
class GetStarted extends MiscellaneousTransform implements MiscellaneousTransformInterface {

  public function setPayload($payload) {
    $this->data['get_started']['payload'] = $payload;

    return $this;
  }

}
