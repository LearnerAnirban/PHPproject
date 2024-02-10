<?php
// abstract class
// when we create abstract class we can't define any object.
// when we declear abstract class we must be have one abstract mathod.
// to access abstract class mast be need inheritance

abstract class parentClass {
  public $name;
  abstract protected function calc($a, $b);
}

class childClass extends parentClass {
  // not necessity to make same variable name of the abstract class
  public function calc($c, $d) {
    echo $c + $d;
  }

}

$abs = new childClass();
$abs->calc(20,34);