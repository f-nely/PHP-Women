<?php

$a = true;
$b = false;


$j = ($a && $b);
$k = ($a || $b);
$l = ($a and $b);
$m = ($a  or  $b);

var_dump($j); //false
var_dump($k); //true
var_dump($l); //false
var_dump($m); //true