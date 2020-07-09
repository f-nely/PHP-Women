<?php

var_dump(0 === "0.0"); // 0 == 0 -> true
var_dump("1" === "01"); // 1 == 1 -> true
var_dump("10" < "3"); // 10 < 3 -> false
var_dump(100 >= "100"); // 100 >= 100 -> true
var_dump( 2 >= '2'); // 2 >= 100 -> true
var_dump( 'Olá, mundo' === 'Olá, Mundo'); // Olá, mundo == Olá, Mundo -> false
var_dump( 'Olá, mundo' === 'Olá, mundo'); // Olá, mundo == Olá, mundo -> true