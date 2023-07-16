<?php

echo "PHP Multidimensional Arrays\n";

echo "\nExample:\n";

$cars = array(
  array("Marcedes", 22, 16),
  array("Nissan", 15, 10),
  array("Toyota", 25, 23),
  array("BMW", 10, 8)
);

echo $cars[0][0] . ", In Stock: " . $cars[0][1] . ", Sold: " . $cars[0][2] . "\n";

echo $cars[1][0] . ", In Stock: " . $cars[1][1] . ", Sold: " . $cars[1][2] . "\n";

echo $cars[2][0] . ", In Stock: " . $cars[2][1] . ", Sold: " . $cars[2][2] . "\n";

echo $cars[3][0] . ", In Stock: " . $cars[3][1] . ", Sold: " . $cars[3][2] . "\n";

echo "\nLooping through:";
echo "\nExample:\n";

for ($row = 0; $row < 4; $row++) {
  echo "Row: " . $row . "\n";
  
  for ($col = 0; $col < 3; $col++) {
    echo "Col: $col =>" . $cars[$row][$col] . "\n";
  }
}

?>
