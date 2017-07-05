<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous\UserMenu;

use FacebookMessengerMiscellaneous\MiscellaneousTransform;
use FacebookMessengerMiscellaneous\MiscellaneousTransformInterface;

/**
 * Class CallToActions.
 */
class CallToActions extends MiscellaneousTransform implements MiscellaneousTransformInterface {

  /**
   * Set the type.
   *
   * @param string $type
   *   The type of the actions.
   *
   * @return CallToActions
   */
  public function setType($type) {
    $this->data['type'] = $type;

    return $this;
  }

  /**
   * Set the title of the page.
   *
   * @param string $title
   *   The button title.
   *
   * @return CallToActions
   */
  public function setTitle($title) {
    $this->data['title'] = $title;

    return $this;
  }

  /**
   * Set the payload.
   *
   * @param $payload
   *   The payload of the button.
   *
   * @return CallToActions
   */
  public function setPayload($payload) {
    $this->data['payload'] = $payload;

    return $this;
  }

  /**
   * Add a call to actions sub menu.
   *
   * @param CallToActions $call_to_actions
   *   The call to actions object.
   *
   * @return CallToActions
   */
  public function addCallToActions(CallToActions $call_to_actions) {
    $this->data['call_to_actions'][] = $call_to_actions->getData();

    return $this;
  }

  /**
   * Reset the call to actions.
   *
   * @return CallToActions
   */
  public function resetCallToActions() {
    $this->data['call_to_actions'] = [];

    return $this;
  }

  /**
   * Set the messenger extensions.
   *
   * @param bool $messenger_extensions
   *   The messenger extensions.
   *
   * @return CallToActions
   */
  public function setMessengerExtensions($messenger_extensions) {
    $this->data['messenger_extensions'] = $messenger_extensions;

    return $this;
  }

  /**
   * Set the fallback URL.
   *
   * @param string $fallback_url
   *   The fallback URL.
   *
   * @return CallToActions
   */
  public function setFallbackUrl($fallback_url) {
    $this->data['fallback_url'] = $fallback_url;

    return $this;
  }

  /**
   * Set the webview share button.
   *
   * @param string $webview_share_button
   *   The webview share button
   * @return $this
   */
  public function setwebview_share_button($webview_share_button) {
    $this->data['webview_share_button'] = $webview_share_button;

    return $this;
  }

}
