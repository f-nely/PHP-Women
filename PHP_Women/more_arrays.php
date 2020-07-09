<?php

$myArray = ["mari", "joão", "paula", "luiza", "josé"];

$inverso = array_reverse($myArray);

foreach($inverso as $valor){
  echo $valor . PHP_EOL;
}

if (in_array("mari", $myArray)){
  echo "Found name: " . PHP_EOL;
}

$myArray2 = [65, 41, 8, 12, 33];

echo (array_sum($myArray2) . "\n");

sort($myArray2);

foreach($myArray2 as $valor){
  echo $valor . "\n";
}
