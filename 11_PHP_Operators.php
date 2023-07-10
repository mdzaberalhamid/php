<?php

echo "PHP Operators\n";

echo "\nPHP Arithmatic Operators:\n";
echo "Example:\n";
$a = 5;
$b = 4;
echo $a + $b . "\t";  // 9
echo $a - $b . "\t";  // 1
echo $a * $b . "\t";  // 20
echo $a / $b . "\t";  // 1.25
// Modulus
echo $a % $b . "\t";  // 1
// Exponentiation
echo $a ** $b . "\t";  // 625
echo 2 ** 3 . "\n";  // 8

echo "\nPHP Assignment Operators:\n";
echo "Example:\n";
$c = 10;
echo $c . "\t";
$c += 40;
echo $c . "\t";  // 50
$c -= 35;
echo $c . "\t";  // 15
$c *= 2;
echo $c . "\t";  // 30
$c /= 10;
echo $c . "\t";  // 3
$c %= 2;
echo $c . "\n";  // 1

echo "\nPHP Comparison Operators:\n";
echo "Example:\n";
// Equal
$d1 = 9;
$d2 = 9;
$d3 = "9";
var_dump($d1 == $d2);  // bool(true)
// Identical
var_dump($d1 === $d2);  // bool(true)
var_dump($d1 === $d3);  // bool(false)
// Not equal
var_dump($d1 != $d2);  // bool(false)
var_dump($d1 <> $d3);  // bool(false)
// Not identical
var_dump($d2 !== $d3);  // bool(true)
// Greater than
var_dump(9 > 8);  // bool(true)
// Less than
var_dump(9 < 8);  // bool(false)
// Greater/Less than or Equal to
var_dump($d1 >= $d3);  // bool(true)
var_dump($d1 <= $d3);  // bool(true)
// Spaceship
var_dump(5<=>9);  // int(-1)
var_dump(9<=>5);  // int(+1)
var_dump(3<=>3);  // int(0)

echo "\nPHP Increment/Decrement Operators:\n";
echo "Example:\n";
$e = 2;
echo ++$e . "\t";  // 3
$f = 4;
echo $f++ . "\t";  // 4
echo $f . "\n";  // 5
$g = 8;
echo --$g . "\t";  // 7
$h = 7;
echo $h-- . "\t";  // 7
echo $h . "\n";  // 6

echo "\nPHP Logical Operators:\n";
echo "Example:\n";
// and
$i = 100;
$j = 50;
if ($i == 100 and $j == 50){
  echo "Both condition is true\n";
}
// or
if ($i == 100 or $j == 90){
  echo "One condition is true\n";
}
// xor
if ($i == 100 xor $j == 20){
  echo "One condition is true and not both condition!\n";
}
// and (&&)
if ($i == 100 && $j == 50){
  echo "true" . "\n";
}
// or (||)
if ($i == 100 || $j == 30){
  echo "true" . "\n";
}
// not (!)
if ($i !== 90){
  echo "true, i is not 90." . "\n";
}

echo "\nPHP String Operators:\n";
echo "Example:\n";
// Concatenation
$txt1 = "Hello ";
$txt2 = "World!";
echo $txt1 . $txt2;
echo "\n";
// Concatenation assignment
echo $txt1 .= $txt2;
echo "\n";

echo "\nPHP Array Operators:\n";
echo "Example:\n";
// Union
$k1 = array("a" => "toyota", "b" => "nissan");
$k2 = array("c" => "ferrari", "d" => "marcedes");
print_r($k1 + $k2);
// Equality
var_dump($k1 == $k2);  // bool(false)
// Identity
var_dump($k1 === $k2);  // bool(false)
// Inequality
var_dump($k1 != $k2);  // bool(true)
var_dump($k1 <> $k2);  // bool(true)
// Non-identity
var_dump($k1 !== $k2);  // bool(true)

echo "\nPHP Conditional Assignment Operators:\n";
echo "----------";
echo "\nEasy Example:\n";
$x = 1;
echo ($x == 1) ? "x is 1" : "x is not 1";

echo "\n";
echo "----------";
echo "\nAbove Easy Example:\n";
// if empty($user) = TRUE, set $status = "anonymous"
$user = "";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "\n";

$user = "John";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "\n";

?>
