<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous;

use FacebookMessengerMiscellaneous\MiscApiInterface;
use GuzzleHttp\Client;

/**
 * Class UserProfile
 *
 * @see https://developers.facebook.com/docs/messenger-platform/user-profile
 */
class UserProfile implements MiscApiInterface {

  use AccessTokenTrait;

  const ADDRESS = 'https://graph.facebook.com/v2.6/me/messages';

  /**
   * Set the fields.
   *
   * @var string
   */
  protected $fields = 'first_name,last_name';

  /**
   * The user ID.
   *
   * @var integer
   */
  protected $uid;

  /**
   * Set the fields.
   *
   * @param $fields
   *   The user fields we need to acquire.
   *
   * @return UserProfile
   *   The current instance.
   */
  public function setFields($fields) {
    $this->fields = $fields;

    return $this;
  }

  /**
   * Set the user ID.
   *
   * @param $uid
   *   The user ID.
   *
   * @return $this
   *   The current instance.
   */
  public function setUid($uid) {
    $this->uid = $uid;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function send() {
    $client = new Client();

    return json_decode($client->get('https://graph.facebook.com/v2.6/' . $this->uid, [
      'query' => [
        'access_token' => $this->accessToken,
        'fields' => $this->fields,
      ],
    ])->getBody());
  }

}
