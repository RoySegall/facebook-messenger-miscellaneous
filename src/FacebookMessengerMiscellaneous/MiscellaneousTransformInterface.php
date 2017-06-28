<?php

namespace FacebookMessengerMiscellaneous;

interface MiscellaneousTransformInterface {

  /**
   * @return array
   */
  public function getData();

  /**
   * Reset the element.
   *
   * @return $this
   */
  public function reset();

}
