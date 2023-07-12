<?php

echo "PHP Loops\n";

// PHP while loop
echo "\nPHP while loop:\n";

echo "\nExample:\n";
$a = 1;
while($a <= 5){
  echo "Value of a is: $a" . "\n";
  $a++;
}

echo "\nExample:\n";
$b = 0;
while($b <= 100){
  echo "$b" . "\t";
  $b += 10;
}

echo "\n\nPHP do while Loop:\n";

echo "\nExample:\n";
$c = 3;
do {
  echo "C = $c" . "\n";
  $c++;
}while($c <= 5);

echo "\nExample:\n";
$d = 9;
do {
  echo "$d";
  $d++;
}
while($d <= 8);

echo "\n\nPHP for Loop:\n";

echo "\nExample:\n";

for ($e = 1; $e <= 10; $e++){
  echo "$e" . " ";
}

echo "\n\nExample:\n";

for ($f = 0; $f <= 100; $f += 20){
  echo "$f" . " ";
}

echo "\n\nPHP foreach Loop:\n";

echo "\nExample:\n";
$colors = array("red","green","blue","yellow");

foreach ($colors as $value) {
  echo "$value\f";
}

echo "\nExample:\n";

$key_val = array("a"=>"1", "b"=>"2", "c"=>"3");

foreach ($key_val as $key => $value) {
  echo "$key = $value\n";
}

echo "\n\nPHP break and continue:\n";

echo "\nExample:\n";

for ($g = 0; $g <= 5; $g++) {
  if ($g == 4) {
    break;
  }
  echo "$g" . "\t";
}

echo "\nExample:\n";

for ($h = 0; $h <= 8; $h++) {
  if ($h == 4) {
    continue;
  }
  echo "$h" . "\t";
}

echo "\nExample:\n";

$i = 0;
while ($i <= 9) {
  if  ($i == 6) {
    break;
  }
  echo "$i" . "\t";
  $i++;
}

echo "\nExample:\n";

$i = 0;
while ($i <= 10) {
  if  ($i == 6) {
    $i++;
    continue;
  }
  echo "$i" . "\t";
  $i++;
}

?>
