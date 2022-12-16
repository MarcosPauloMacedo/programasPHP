<?php

//Programa que recebe um numero real e calcule o quadrado
//deste número. Ao final mostre os resultados do cálculo

$numero = 44.6;

$quadrado = function ($numero){
    return $numero ** 2;
};

echo $quadrado($numero);