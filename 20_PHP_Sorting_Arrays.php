<?php

echo "PHP Sorting Arrays\n";

echo "\nSorting array in ascending order:\n";
echo "Example:\n";

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

for ($i = 0; $i < count($cars); $i++) {
  echo $cars[$i] . " ";
}

echo "\nExample:\n";
$numbers = array(4,1,8,5,9);
sort($numbers);

$counter = count($numbers);
for($j = 0; $j < $counter; $j++){
  echo $numbers[$j] . " ";
}

echo "\n\nSorting array in descending order:\n";
echo "Example:\n";

$cars2 = array("Volvo", "BMW", "Toyota", "Nissan");
rsort($cars2);

for ($k = 0; $k < count($cars2); $k++) {
  echo $cars2[$k] . " ";
}

echo "\nExample:\n";
$numbers2 = array(4,1,8,5,9);
rsort($numbers2);

for ($l = 0; $l < count($numbers2); $l++) {
  echo $numbers2[$l] . " ";
}

echo "\n\nSorting array in ascending order according to value:\n";
echo "Example:\n";

$age = array("Peter"=>"38", "Ben"=>"35", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value){
  echo $x . " => " . $x_value . "\n";
}

echo "\n\nSorting array in ascending order according to key:\n";
echo "Example:\n";

$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age2);

foreach($age2 as $x => $x_value){
  echo $x . " => " . $x_value . "\n";
}

echo "\n\nSorting array in descending order according to value:\n";
echo "Example:\n";

$age3 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age3);

foreach($age3 as $x => $x_value){
  echo $x . " => " . $x_value . "\n";
}

echo "\n\nSorting array in descending order according to key:\n";
echo "Example:\n";

$age4 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age4);

foreach($age4 as $x => $x_value){
  echo $x . " => " . $x_value . "\n";
}

?>
