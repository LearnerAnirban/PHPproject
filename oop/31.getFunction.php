<?php 

//-->> get_class
class myClass {
  public function name() {
    echo "get class name: " . get_class($this);
    echo "<br>";
  }
}
$obj = new myClass();
$obj->name();
echo "get class Name is: " . get_class($obj); // get class outsite class
echo "<br>";
//-->> get_parent_class
class abc extends myClass {
  function name() {
    echo "get parent Class Name :" . get_parent_class($this);
    echo "<br>";
  }
}

$objParent = new abc();
$objParent->name();
//-->> get_class_methods

//-->> get_class_vars
//-->> get_object_vars
//-->> get_called_class
//-->> get_declared_classes
//-->> get_declared_interfaces
//-->> get_declared_traits
//-->> class_alias
