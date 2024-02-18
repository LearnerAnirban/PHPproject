<?php
// copy by value
$a = 5;
$b = $a;
$b = 10;
//copy by reference
// by reference copy alocate the memory location. x location will take y when we asign value.
$x = 5;
//by reference "&" sign
$y = & $x;
$y = 10;

echo $a;
echo "<br>";
echo $x;

// clone Method in OOP
// ===================