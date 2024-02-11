<?php 
//Type Hinting (valid data types)
// Int, Float, String, Bool, Array, Class/ Interface Name, Object

// Type hinting is a process in which we declare the datatype to restrict the input value. if a user inputs a string but I need to addition then an error will occur. 

class hello {
  public function sayHello() {
    echo "hello EveryOne";
  }
}
class bye {
  public function sayBye() {
    echo "Bye Everyone";
  }
}
//type hinting
function wow(hello $c) {
  $c->sayHello();
}

$test = new hello();
wow($test);