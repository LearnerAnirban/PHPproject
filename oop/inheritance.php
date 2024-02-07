<?php 
// inheritance
    //Base Class
    //Derived Class
    //Multi-level-inheritance


class employee {
  public $name;
  public $age;
  public $salary;

  function __construct($n, $a, $s) {
    $this->name = $n;
    $this->age = $a;
    $this->salary = $s;
  }
  function info() {
    echo "<h3>Employee Pro</h3>";
    echo $this->name . "<br>" . $this->age . "<br>" . $this->salary;
  }
}

//object
$e1 = new employee("Anirban", 20, 50000);
$e1->info();