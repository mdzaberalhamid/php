<?php

echo "\nPHP Associative Arrays\n";

echo "Example:\n";
$age = array("Zaber"=>"30", "Araf"=>"29", "Pial"=>"33");

echo "Zaber is " . $age["Zaber"] . " years old.\n";
echo "Pial is " . $age["Pial"] . " years old.\n";

echo "\nLoop through an associative array\n";
echo "Example:\n";

foreach ($age as $x => $x_value) {
  echo $x . " => " . $x_value . "\n";
}

?>
