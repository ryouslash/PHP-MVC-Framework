<?php

namespace app\core;

abstract class Model
{
  public function loadData($date)
  {
    foreach ($date as $key => $value) {
      if (property_exists($this, $key)) {
        $this->{$key} = $value;
      }
    }
  }

  public function validate() {
    
  }
}
