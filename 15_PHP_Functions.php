<?php

echo "PHP Functions\n";

echo "\nCreating a function:\n";

echo "Example:\n";

function wlcMsg() {
  echo "Hi, welcome!\n";
}
wlcMsg();

echo "\nFunction Arguments:\n";

echo "Example:\n";

function wlcMsg2 ($name) {
  echo "Hi $name, welcome!\n";
}
wlcMsg2("Zaber");
wlcMsg2("Araf");
wlcMsg2("Pial");

echo "Example:\n";

function nameBirthYear ($name, $year) {
  echo "$name born in $year.\n";
}
nameBirthYear("Zaber","1993");
nameBirthYear("Jahi","2004");

echo "\nDefault Argument Value:\n";

echo "Example:\n";

function showHeight ($minHeight = 50) {
  echo "The height is: $minHeight\n";
}
showHeight ("165");
showHeight ();  // default value is 50
showHeight ("99");

echo "\nFunction Returning Value:\n";

echo "Example:\n";

function sum ($num1, $num2) {
  $total = $num1 + $num2;
  return $total;
}

echo sum(7, 3) . "\n";
echo sum(9, 6) . "\n";
echo sum(9, 16) . "\n";

echo "\nReturn Type Declarations:\n";

echo "Example:\n";

function divNums ($n1, $n2) : int {
  $div =  $n1 / $n2;
  return $div;
}

echo divNums (10, 3) . "\t";
echo divNums (15, 4) . "\t";
echo divNums (5, 4) . "\t";

echo "\nExample:\n";

function multiNums ($m1, $m2) {
  $multi =  $m1 * $m2;
  return (int)$multi;
}

echo multiNums (2.5, 4.3) . "\t";
echo multiNums (5.8, 1.7) . "\t";
echo multiNums (9.9, 3) . "\n";

echo "\nPassing Arguments by Reference:\n";

echo "Example:\n";

function addFive (&$value) {
  $value += 5;
}

$myNum1 = 1;
addFive($myNum1);
echo $myNum1 . " ";

?>
