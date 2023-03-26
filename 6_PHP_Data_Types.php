<?php
// PHP data types

// PHP string
$str1 = "String 1";
$str2 = "String 2";
echo $str1 . "\n";  // String 1
echo $str2 . "\n";  // String 2
echo "\n";

// PHP integer
$num1 = 12345;
$num2 = -67890;
$num3 = 13579;
echo $num1 . "\n";  // 12345
echo $num2 . "\n";  // -67890
echo var_dump($num3) . "\n";  // int(13579)

// PHP float
$num4 = 10.378;
echo $num4 . "\n";  // 10.378
echo var_dump($num4) . "\n";  // float(10.378)

// PHP boolean
$pos = true;
$neg = false;
echo $pos . "\n";  // 1
echo $neg . "\n";  // 0

// PHP array
$fruits = array("Mango","Banana","Apple");
echo var_dump($fruits);

// PHP object
class Car {
  public $color;
  public $model;
  public function _construct($color, $model){
    $this->color = $color;
    $this->model = $model;
  }
  public function message(){
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}
$myCar = new Car("Red", "Ferrari");
echo $myCar -> message();
echo "\n";
$myCar = new Car("Blue", "Toyota");
echo $myCar -> message();
echo "\n";

// PHP null
$x = null;
$y;
echo var_dump($x);  // NULL
echo var_dump($y);  // NULL

?>
