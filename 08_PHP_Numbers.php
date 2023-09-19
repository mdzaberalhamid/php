<?php

echo "PHP Numbers\n";

echo "\nInteger:\n";
echo "Example:\n";
$num1 = 30;
echo $num1 . "\n";
var_dump(is_int($num1));
$num2 = 2.456;
echo $num2 . "\n";
var_dump(is_int($num2));

echo "\nFloat:\n";
echo "Example:\n";
$num3 = 6.54321;
echo $num3 . "\n";
var_dump(is_float($num3));

echo "\nInfinity:\n";
echo "Example:\n";
$num4 = 1.9e411;
echo $num4 . "\n";
var_dump($num4);
// var_dump(is_infinite($num4));

echo "\nPHP NaN:\n";
echo "Example:\n";
$num5 = acos(5);
echo $num5 . "\n";
var_dump($num5);

echo "\nPHP Numerical Strings:\n";
echo "Example:\n";
$x1 = 123;
var_dump(is_numeric($x1));
$x2 = "456";
var_dump(is_numeric($x2));
$x3 = "59.85" + 100;
var_dump(is_numeric($x3));
$x4 = "hello";
var_dump(is_numeric($x4));

echo "\n";
echo "\nCasting strings and floats to integers:\n";
echo "Example:\n";
// Cast float to int
$f = 123.456;
echo $f . "\n";
$f_cast = (int)$f;
echo $f_cast;
echo "\n";
// Cast string to int
$s = "456.789";
echo $s . "\n";
$s_cast = intval($s);
echo $s_cast;
?>
