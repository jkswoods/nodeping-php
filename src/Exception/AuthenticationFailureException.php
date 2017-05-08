<?php

namespace Nodeping\Exception;

class AuthenticationFailureException extends \Exception {

  private $response;

  /**
   * Class constructor.
   *
   * @param $message.
   * @param $response.
   * @param $code.
   */
  public function __construct($message, $response, $code = 0) {
    $this->response = $response;
    parent::__construct($message, $code);
  }

  /**
   * Returns the response which caused the exception.
   */ 
  public function getResponse() {
    return $this->response;
  }
}
