<?php

echo "PHP Constants\n";

echo "\nCreating PHP constant:";
echo "\nExample 1:\n";
define("wlc_msg","Hi, welcome to coding!");
echo wlc_msg;
echo "\n";

echo "\nExample 2:\n";
define("wlc_msg_2","I hope you enjoy learning PHP", true);
echo wlc_msg_2 . "\n";
echo WLC_MSG_2 . "\n";

echo "\nCreating PHP constant arrays:";
echo "\nExample 3:\n";
define("cars",["toyota","nissan","ford"]);
echo cars[0] . "\n";
echo cars[1] . "\n";

echo "\nConstant Global:";
echo "\nExample 4:\n";
define("test","This is constant global test!");

function f(){
  echo test;
}
f();

?>
