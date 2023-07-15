<?php

echo "PHP Indexed Arrays\n";

echo "Example:\n";
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0] . " " . $cars[1] . " " . $cars[2];

echo "\n\nLoop through an indexed array:\n";
echo "Example:\n";

$carsplus = array("Marcedes", "Ferrari", "Audi");
$arrlength = count($carsplus);

for ($a = 0; $a < $arrlength; $a++) {
  echo $carsplus[$a] . "\n";
}

?>
