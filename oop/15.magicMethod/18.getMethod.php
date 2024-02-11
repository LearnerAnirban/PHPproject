<?php 
// If trying to access  Non Existing or Private property then the "__get" Method automatic run.

// class abc {
//   private $name = "Anirban Roy";
//   public function __get($property) {
//     echo "You are trying to access Non Existing or Private Property ($property)";
//   }
// }

// $test = new abc();

// with "__get" method we can also get the value of private method.
class xyz {
  private $person = ["name" => "anirban", "age" => 20, "title" => "Roy"];
  public function __get($key) {
    if(array_key_exists($key, $this-> person )) {
      return $this->person[$key];
    }else {
      return "this key ($key) is not defined";
    }
  }
}

$per = new xyz();
echo $per->age; 