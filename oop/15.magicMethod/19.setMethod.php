<?php 
//

class student {
  private $name;

  public function hello() {
    echo $this->name;
  }
  public function  __get($property) {
    echo "You are tryinig to access now existing or private property ($property)\n";
  }
  //__set method
  public function __set($property, $value) {
    if(property_exists($this, $property)) {
      $this->$property = $value;
    }else {
      echo "this is a non existing or private property : $property" ;
    }

  }
}

$test = new student();
$test->name = "Anirban";
$test->hello();