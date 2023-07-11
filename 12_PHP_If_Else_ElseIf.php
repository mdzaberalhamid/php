<?php

echo "PHP If...Else...ElseIf\n";

echo "\nIf statement:\n";

echo "Example:\n";
$time = 6;
if ($time < 10){
  echo "Good Morning!\n";
}

echo "\nIf...Else statement:\n";

echo "Example:\n";
$price = 20;
if ($price < 15) {
  echo "Price is ok!\n";
}
else {
  echo "price increased.\n";
}

echo "\nIf...Else...ElseIf statement:\n";

echo "Example:\n";
$playerRating = 2500;

if ($playerRating <= 1900){
  echo "You are a Beginner.";
}
elseif ($playerRating <= 2200){
  echo "You are an Amateur!";
}
else {
  echo "You are a Master!!";
}

?>
