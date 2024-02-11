<?php 
// function __autoload($class) {
//   require "autoload/" . $class . ".php";
// }
spl_autoload_register( function($class_name) {
  require "autoload/" . $class_name . ".php";
});
$test1 = new second();