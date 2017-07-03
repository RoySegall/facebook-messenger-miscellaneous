<?php

namespace FacebookMessengerMiscellaneous\Miscellaneous\UserMenu;

use FacebookMessengerMiscellaneous\MiscellaneousTransform;
use FacebookMessengerMiscellaneous\MiscellaneousTransformInterface;

/**
 * Class MessengerProfileApi
 *
 * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/persistent-menu
 */
class PersistentMenu extends MiscellaneousTransform implements MiscellaneousTransformInterface {

  /**
   * PersistentMenu constructor.
   */
  public function __construct() {
    $this->data['persistent_menu'] = [];
  }

  /**
   * Set the locale.
   *
   * @param $locale
   *   The locale of the menu.
   *
   * @return PersistentMenu
   *   The current object.
   */
  public function setLocale($locale) {
    $this->data['persistent_menu']['locale'] = $locale;

    return $this;
  }

  /**
   * Set if the input field is disabled or not.
   *
   * @param $composer_input_disabled
   *   Boolean.
   *
   * @return PersistentMenu
   *   The current object.
   */
  public function setComposerInputDisabled($composer_input_disabled) {
    $this->data['persistent_menu']['composer_input_disabled'] = $composer_input_disabled;

    return $this;
  }

  /**
   * Add a call to action element.
   *
   * @param CallToActions $callToActions
   *   A call to action instance.
   *
   * @return PersistentMenu
   *   The current object.
   */
  public function addCallToActions(CallToActions $callToActions) {
    $this->data['persistent_menu']['call_to_actions'][] = $callToActions->getData();

    return $this;
  }

  /**
   * Reset the call to actions.
   *
   * @return PersistentMenu
   *   The current object.
   */
  public function resetCallToActions() {
    $this->data['persistent_menu']['call_to_actions'] = [];

    return $this;
  }

}
