<?php

$inteiro = 23; // inteiro
$float = 4.50; //float
$string = 'Olá, mundo!'; //string
$boleeano = TRUE; // boleano

echo gettype($inteiro) . PHP_EOL; // imprime na tela integer
echo gettype($float) . PHP_EOL; // imprime na tela double
echo gettype($string). PHP_EOL;// imprime na tela string
echo gettype($boleeano) . PHP_EOL; // imprime na tela boolean

var_dump($inteiro);
var_dump($float);
var_dump($string);
var_dump($boleeano);