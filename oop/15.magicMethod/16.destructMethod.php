<?php 
// Destruct Method called automatic after the complete

class abc {
  public function __construct() {
    echo "This is Construct function" . "<br>";
  }
 
  // destruct fucntion call automatic at the last
  public function __destruct() {
    echo "This is destruct Function" . "<br>";
  }
  public function hello() {
    echo "Hello Everyone" . "<br>";
  }
}

$test = new abc();
$test->hello();
