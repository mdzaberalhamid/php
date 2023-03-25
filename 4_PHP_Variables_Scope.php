<?php
// PHP variables scope

// Global scope
$x = 2;    // global scope variable

function f1(){
  echo "Value of x is: $x \n";
}
f1();

echo "Value of x is: $x";
echo "\n";

// Local scope
function f2(){
  $y = 4;    // local scope variable
  echo "Value of y is: $y" . "\n";
}
f2();

echo $y;    // variable y is local, will not work outside the scope of the function.

// PHP global keyword
$a = 7;
$b = 3;

function f3(){
  global $a, $b;
  $a = $a + $b;
}
f3();
echo "Value of a is: $a" . "\n";

// PHP static keyword
function f4(){
  static $c = 0;  // static scope variable
  echo $c . "\n";
  $c++;
}
f4();
f4();
f4();

?>
