<?php 
// invoke method ussed for convart a object as function

class calculation {
  public $a;
  public $b;
  public function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }
// invoke method will call after call object function
  public function __invoke() {
    echo $this->a + $this->b;
  }
}

$obj = new calculation(39,23);
$obj();
