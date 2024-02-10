<?php 
//trait ma

trait hello {
  //access private
  private function sayHello() {
    echo "Hello form Hello Trait \n";
  }
}
 trait hi {
  public function sayHello() {
    echo "Hello form Hi trait \n";
  }
 }
 class base1 {
  use hello, hi {
    // trait function make public
    hello::sayHello as public;
    // define the priority of the trait function
    hello::sayHello insteadof hi;
    // rename the trait function
    hi:: sayHello as newHello;
  }
 }

 $tra = new base1();
 $tra->sayHello();
