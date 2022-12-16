<?php

//Programa que receba dois números e realiza as 4 operações 
//básicas entre estes dois números e mostrar os resultados

$numero1 = 20;
$numero2 = 2;

$subtracao = function($n1,$n2){
    return $n1 - $n2;
};

$soma = function($n1,$n2){
    return $n1 + $n2;
};

$divisao = function($n1,$n2){
    return $n1 / $n2;
};

$multiplicacao = function($n1,$n2){
    return $n1 * $n2;
};

echo $subtracao($numero1,$numero2) . PHP_EOL;
echo $soma($numero1,$numero2) . PHP_EOL;
echo $divisao($numero1,$numero2) . PHP_EOL;
echo $multiplicacao($numero1,$numero2) . PHP_EOL;

