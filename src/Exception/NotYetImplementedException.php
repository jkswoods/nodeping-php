<?php

namespace Nodeping\Exception;

class NotYetImplementedException extends \Exception {

  /**
   * Class constructor.
   *
   * @param $message.
   * @param $code.
   */
  public function __construct($message, $code = 0) {
    parent::__construct('Function is not yet implemented ' . $message, $code);
  }
}
