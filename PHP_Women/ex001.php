<?php

echo "Informe o primeiro valor: ";
$var1 = intval( rtrim(fgets(STDIN)));

echo "Informe o segundo valor: ";
$var2 = intval( rtrim(fgets(STDIN)));

$soma = $var1 + $var2;
$sub = $var1 - $var2;
$div = $var1 / $var2;
$mult = $var1 * $var2;
$potencia = $var1 ** $var2;
$modulo = $var1 % $var2;

echo "A soma entre {$var1} e {$var2} é {$soma}" .PHP_EOL;
echo "A subtração entre {$var1} e {$var2} é {$sub}" .PHP_EOL;
echo "A divisão entre {$var1} e {$var2} é {$div}" .PHP_EOL;
echo "A multiplicação entre {$var1} e {$var2} é {$mult}" .PHP_EOL;
echo "A pontencia entre {$var1} e {$var2} é {$potencia}" .PHP_EOL;
echo "O modulo entre {$var1} e {$var2} é {$modulo}" .PHP_EOL;

