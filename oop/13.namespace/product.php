<?php 
// 1st way to declare namespace
namespace pro\v1\name;
class product {
  public function __construct() {
    // echo "This is product page";

    //make sure "\" if use class in another class
    $test = new \test\product;
  }


}