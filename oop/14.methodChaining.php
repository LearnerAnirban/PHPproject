<?php 
// Method Chaining is call class function at a time
class abc {
  public function first() {
    echo "this is first function \n" . "<br>";
    // for method chaining require "return $this"
    return $this;
  }

  public function second() {
    echo "this is second function" . "<br>";
    // for method chaining require "return $this"
    return $this;
  }

  public function third() {
    echo "this is third function" . "<br>";
   // at the last not require "return $this"
  }
}

$c1 = new abc;
$c1->first()->second()->third();