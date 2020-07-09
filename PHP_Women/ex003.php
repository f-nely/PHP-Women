<?php

echo "Informe a temperatura em Fahrenheit: ";

$f = rtrim(fgets(STDIN)); 

$c = (($f - 32) * 5) / 9;

echo "A temperatura em Celsios é $c";