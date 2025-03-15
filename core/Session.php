<?php

namespace app\core;

class Session
{
  protected const FLASH_KEY = 'flash_messages';
  public function __construct()
  {
    session_start();
    $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

    foreach ($flashMessages as $key => $flashMessage) {
      // Mark to be removed
      $flashMessage['remove'] = true;
    }

    echo '<pre>';
    var_dump($flashMessages);
    echo '</pre>';
    $_SESSION[self::FLASH_KEY] = $flashMessages;
  }


  public function setFlash($key, $message)
  {
    $_SESSION[self::FLASH_KEY][$key] = [
      'remove' => false,
      'value' => $message
    ];
  }

  public function getFlash($key) {}

  public function __destruct()
  {
    //Iterate over marked 
  }
}
