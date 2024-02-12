<?php 
// unset magic method use for unset private property

class student {

  public $course = "my Course";
  private $first_name;
  private $last_name;

  public function setName($fname, $lname) {
    $this->first_name = $fname;
    $this->last_name = $lname;
  }
// unset method declare
  public function __unset($property) {
    unset($this->$property);
  }
}

$test = new student();
$test->setName("anirban", "roy");
// mustbe write the code for unset while use "__unset" magic method.
unset($test->last_name);
echo "<pre>";
print_r($test);
echo "</pre>";