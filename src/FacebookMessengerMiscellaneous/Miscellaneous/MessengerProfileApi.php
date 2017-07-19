<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

use FacebookMessengerMiscellaneous\AccessTokenTrait;
use FacebookMessengerMiscellaneous\MiscApiInterface;
use FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\CallToActions;
use FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\GetStarted;
use FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\PersistentMenu;
use FacebookMessengerMiscellaneous\MiscellaneousTransform;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

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
  public $persistentMenu;

  /**
   * @var CallToActions
   */
  public $callToActions;

  /**
   * @var GetStarted
   */
  public $getStarted;

  /**
   * MessengerProfileApi constructor.
   */
  public function __construct() {
    $this->persistentMenu = new PersistentMenu();
    $this->callToActions = new CallToActions();
    $this->getStarted = new GetStarted();
  }

  /**
   * {@inheritdoc}
   */
  public function send(MiscellaneousTransform $payload = NULL) {
    $this->address .= '?access_token=' . $this->accessToken;

    $options = [
      'form_params' => $payload->getData(),
    ];

    $client = new Client();

    try {
      $client->post($this->address, $options);
    } catch (ClientException $e) {
      var_dump($e->getResponse()->getBody()->getContents());
    }

  }

}
