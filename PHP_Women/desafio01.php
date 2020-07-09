<?php

echo "Informe a primeira nota: ";
$nota1 = intval( rtrim(fgets(STDIN)));

echo "Informe a segunda nota: ";
$nota2 = intval( rtrim(fgets(STDIN)));

$media = ($nota1 + $nota2) / 2;

echo "A média é {$media}";

