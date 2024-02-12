<?php 
// CALL static method works on private static function. It's automatic call

class student {
  private static function hello($name) {
    echo "Hello $name";
  }
  //call static Method
  public static function __callStatic($method, $args) {
    if(method_exists(__class__, $method)) {
      call_user_func_array([__class__, $method], $args);
    }else {
      echo "Method dosen't exist.";
    }
  }
}
student::hello("anirban");