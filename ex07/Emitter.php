<?php

class Emitter
{
  // Your code here
  private static $instance;
  private $listeners = [];

  public static function getInstance(): Emitter
  {
    if (!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function emit(string $event, ...$args)
  {
    
  }
}
