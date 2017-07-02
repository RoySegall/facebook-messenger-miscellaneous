<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

use FacebookMessengerMiscellaneous\MiscApiInterface;
use FacebookMessengerMiscellaneous\MiscellaneousTransform;

/**
 * Class MessengerProfileApi
 *
 * @package FacebookMessengerMiscellaneous\Miscellaneous
 */
class MessengerProfileApi extends MiscellaneousTransform implements MiscApiInterface {

  use AccessTokenTrait;

  /**
   * {@inheritdoc}
   */
  public function send() {
  }

}
