<?php

namespace FacebookMessengerMiscellaneous;

abstract class MiscellaneousTransform implements MiscellaneousTransformInterface {

  const ADDRESS = '';

  /**
   * @var array
   */
  protected $data;

  /**
   * {@inheritdoc}
   */
  public function getData() {
    return $this->data;
  }

  /**
   * {@inheritdoc}
   */
  public function reset() {
    $this->data = [];
    return $this;
  }

}
