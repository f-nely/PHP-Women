<?php

echo "Informe o estado: ";
$estado = readline("Infome o estado: "); 

//$estado = rtrim(fgets(STDIN)); 

switch ($estado) {
  case 'rj':
    echo "Carioca"; 
    break;
  case 'sp':
    echo "Paulista"; 
    break;
  case 'mg':
    echo "Mineiro"; 
    break;
  default:
    echo "Outro estado";
    break;
}