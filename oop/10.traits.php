 <?php 
 // when we need to use a same function in many classes then we use "traits". Traits mainly help to use same function in various class.

 trait sayHello {
  public function sayhello() {
    echo "Hello everyone \n";
  }
 }
 trait bye {
  public function bye() {
    echo "Bye everyone \n";
  }
 }
 class base1 {
  use sayHello, bye;
 }
 class base2 {
  use sayHello;
 }

 $tra = new base1();
 $tra2 = new base2();
 $tra->sayhello();
 $tra->bye();
 $tra2->sayhello();