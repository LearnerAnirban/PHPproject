<?php
//Constructor function
// class, property, object

//class
class person {
  //property
  // public $name, $age;
  //set default value
  public $name = "no name";
  public $age = 16;

  //constructor mathod
  function __construct($n, $a) {
    $this->name = $n;
    $this->age = $a;
  }

  // //simple mathod
  function show() {
    echo $this->name . " - " . $this->age;
  }
}

//object
$p1 = new person("anirban", 20);

// $p1->name = "Anirban";
// $p2->age = 20;

$p1->show();