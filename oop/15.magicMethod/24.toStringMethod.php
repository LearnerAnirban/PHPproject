<?php 
// toString Method

class abc {
  // toString method
  public function __toString() {

    // get_class() method print the class name 
    return "Cann't print object as a string of thid class" . get_class($this);
  }
}

$test = new abc();

echo $test;