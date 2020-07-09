<?php

// Quantidade de caracter
$txt = "curso em video";
echo (strlen($txt)) . PHP_EOL; 

// Retira espaços no início e no final 
$str = "  PHP Women BR  ";
echo '|'.$str."|\n";
echo '|'.trim($str)."|\n";

$nome = "   josé da silva ";
// Retira espaços no início - ltrim()
echo (ltrim($nome)) .PHP_EOL; 
// Retira espaços no final - rtrim()
echo (rtrim($nome)) .PHP_EOL;

// Contidades de palavras
$frase = "I will study PHP";
print(str_word_count($frase)) . PHP_EOL;

// Cria um vetor com cada palavra
$site = "curso em video";
$vetor = explode(" ", $site);
print_r($vetor) . "\n";

// Transforma cada letra em vetor
$cat = "luluzinha";
print_r(str_split($cat));

$myArray = ["curso", "em", "video"];
$array = implode("#", $myArray);
printf($array) . "\n";

$myArray2 = ["curso", "em", "video"];
$array2 = join("@", $myArray2);
printf($array2) . "\n";

// Primeira letra da string em caixa alta
echo ucfirst("php women br") . "\n" ;

// Coloca o  primeiro caractere em caixa baixa.
echo lcfirst("PHP") . "\n" ;

// Primeira letra de cada palavra em caixa alta
echo ucwords("php women br") . "\n" ;

// Colocar todos os caracteres em caixa baixa 
echo strtolower("PHPWOMENBR") . "\n" ; 

// Colocar todos os caracteres em caixa alta
echo strtoupper("phpwomenbr") . "\n" ; 

// É utilizada para reverter uma string
echo strrev("PHPWomenBR");

// Utilizada quando queremos apresentar apenas parte de uma string
echo substr("Hello my name is developer",0,5);
