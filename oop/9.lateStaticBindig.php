<?php 
// if need to show derived class property value then we have to use the late static binding (stacic)
class base {
  protected static $name = "Anirban";
  public function show() {
    //late static binding
    echo static::$name;
    //static members
    echo self::$name;
  }
}
class derived extends base {
  protected static $name = "Roy";
}

$latest = new derived();
$latest->show();