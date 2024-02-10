<?php
//overriding property and method is redefine a propety and method in dirive class.

class base {
  public $name = "Base Class";
}
class derived {
  //overiding property
  public $name = "derived Class";
}

$over = new derived();
echo $over->name;