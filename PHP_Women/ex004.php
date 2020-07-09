<?php

echo "Informe o nome: ";
$name = rtrim(fgets(STDIN)); 

echo "Informe o sobrenome: ";
$lastName = rtrim(fgets(STDIN)); 

echo $name . " " . $lastName;
echo "\n";

$nomeCompleto = "nely de faria";
echo (strlen($nomeCompleto)) . PHP_EOL; 

echo strtoupper($nomeCompleto) . "\n" ; 






