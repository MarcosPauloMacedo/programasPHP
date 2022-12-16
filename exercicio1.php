<?php

//Programa que imprima a média aritmética entre os
//números 5,8,12

$numeros = [5,8,12];
$total = 0;

foreach ($numeros as $nota){
    $total = $total + $nota;
}

$media = $total / sizeof($numeros);
$media = number_format($media, 2, '.', '');

echo $media;



