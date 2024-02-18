<?php 
// wakeup method

class student {
  public $course = "PHP";
  private $first_name;
  private $last_name;
  public function setName ($fname, $lname) {
    $this->first_name = $fname;
    $this->last_name = $lname;
  }
  // sleep magic mathod
  public function __sleep() {
    return array('first_name', 'last_name');
  }

  public function __wakeup() {
    echo "this is unserialize method";
  }
}

$obj = new student();
$obj->setName("Anirban", "Roy");
// serialize method convarted an object to an array.
$srl = serialize($obj);
// unserialize method convarted an array to an object.
$us = unserialize($srl);
print_r($us); 