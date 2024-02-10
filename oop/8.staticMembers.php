<?php 
// without creating object we can call function and property with static members
// to use static property and method need to write "self::"

class base {
  //static member
  public static $name = "Anirban";
  public static function show() {
    echo self::$name;
  }
  public function __construct($n) {
    // self::show();
    self::$name = $n;
  }
}
class derived extends base {
  public static function show() {
    //parent class value write with "parent" keyword.
    echo parent::$name;
  }
}

// echo base::$name;
// base::show();

//object
$satic = new base("this is anirban");
$satic-> show();