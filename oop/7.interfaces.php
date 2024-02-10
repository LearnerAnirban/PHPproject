<?php
// when maltiple class need to inherite one derived class then interfaces is worked.
// interface don't need any  "access modifire". By default can't be access directly. 
// can't make any object. To access need to create derived class.
// in the interface just can be declare function only.
// to make derived class in interface write "implements".
    // make "interface"

interface parent1 {
  function calc($a, $b);
}
interface parent2 {
  function sub($c, $d);
}
//interface
class childClass implements parent1, parent2 {
  public function calc($a, $b) {
    echo $a + $b;
  }
  public function sub($c, $d) {
    echo $c - $d;
  }
}

$inter = new childClass();
$inter->calc(30, 70); 
echo "<br>";
$inter->sub(50, 30);
