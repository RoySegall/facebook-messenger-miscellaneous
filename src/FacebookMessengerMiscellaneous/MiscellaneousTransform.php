<?php

namespace FacebookMessengerMiscellaneous;

abstract class MiscellaneousTransform implements MiscellaneousTransformInterface {

  /**
   * The address to send the request.
   *
   * @var string
   */
  protected $address;

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
