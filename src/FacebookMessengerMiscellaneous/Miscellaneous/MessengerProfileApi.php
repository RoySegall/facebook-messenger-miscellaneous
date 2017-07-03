<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

use FacebookMessengerMiscellaneous\AccessTokenTrait;
use FacebookMessengerMiscellaneous\MiscApiInterface;
use FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\PersistentMenu;

/**
 * Class MessengerProfileApi
 */
class MessengerProfileApi implements MiscApiInterface {

  use AccessTokenTrait;

  /**
   * {@inheritdoc}
   */
  protected $address = 'https://graph.facebook.com/v2.6/me/messenger_profile';

  /**
   * @var PersistentMenu
   */
  protected $persistentMenu;

  /**
   * MessengerProfileApi constructor.
   */
  public function __construct() {
    $this->persistentMenu = new PersistentMenu();
  }

  /**
   * {@inheritdoc}
   */
  public function send() {
    $this->address .= '?access_token=' . $this->accessToken;
  }

}
