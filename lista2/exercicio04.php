<?php

//Crie um programa que imprima os 20 primeiros termos da série
//de FIbonacci.


function fibonacci(){
    $aux = 1;
    $valor = 0;
    $contador = 1;
    $n1 = 1;

    while($contador<=20){
        $aux = $valor;
        $valor = $valor + $n1;
        $n1 = $aux;

        echo "$valor ";
        $contador++;
    }
}

fibonacci();