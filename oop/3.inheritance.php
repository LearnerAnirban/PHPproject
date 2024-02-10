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
  // function __construct() {
  //   echo "Employee profile";
  // }
  
  function info() {
    echo "<h3>Employee Profle</h3>";
    echo $this->name . "<br>" . $this->age . "<br>" . $this->salary;
  }
}

//manager inheritance employee class
class manager extends employee {
  public $vara = 2100;
  public $phone = 1500;
  public $totalSalary;

  function info() {
    $this->totalSalary = $this->salary + $this->vara + $this->phone;
    echo "<h3>Manager Profle</h3>";
    echo $this->name . "<br>" . $this->age . "<br>" . $this->totalSalary;
  }
}

//object
$e1 = new employee("Anirban", 20, 1000);
$e2 = new manager("shikha", 20, 2000);
$e1->info();
$e2->info();