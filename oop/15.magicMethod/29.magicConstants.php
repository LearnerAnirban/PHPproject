<?php 
/*
15. Magic Constants

>> four magic constant can be use anwhere
__LINE__      >> show line number
__FILE__      >> return file absolute path
__DIR__       >> return folder absolute path
__FUNCTION__  >> retunr function name

>> Last four magic constant can be use only OOP
__CLASS__     >> return class name
__METHOD__    >> return method name
__NAMESPACE__ >> return namespace name
__TRAIL__     >> return trait name

*/
// namespace MyNamespace;

echo "show line number: " . __LINE__ . "<br>";
echo "return file absolute path: " . __FILE__ . "<br>";
echo "return folder absolute path: " . __DIR__ . "<br>";
function myFunction() {
  echo "retunr function name: " . __FUNCTION__ . "<br>";
}
myFunction();


class myClass {
  use MyTrait;
  public function getClassName() {
    return __CLASS__;
  }
  public function getMethodName() {
    return __METHOD__;
  }
  public function getNamespaceName() {
    return __METHOD__;
  }
}

$myClass = new myClass();
echo $myClass->getClassName();
echo "<br>";
echo $myClass->getMethodName();
echo "<br>";
echo $myClass->getNamespaceName();
echo "<br>";
echo $myClass->getTraitName();

trait MyTrait{
  public function getTraitName() {
    return __TRAIT__;
  }
}