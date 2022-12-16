<?php

//Programa que recebe a base e a altura de um retângulo
//e imprima o perímetro (base + altura) e área (base * altura)

$base = 10;
$altura = 5;

$perimetro = function($base,$altura){
    return $base + $altura;
};

$area = function($base,$altura){
    return $base * $altura;
};

echo "O perímetro entre $base e $altura m é de \n";
echo $perimetro($base,$altura) ." metros" .PHP_EOL .PHP_EOL;

echo "A ara entre $base e $altura m é de \n";
echo $area($base,$altura) . " metros quadrados";
