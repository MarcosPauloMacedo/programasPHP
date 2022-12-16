<?php

/*
Programa que recebe o salário e retorna e retorna a alíquota
do imposto de renda conforme os seguintes critérios:

< que 1300 reais - isento
>= 1300 e < 2300 reais - 10% do salário bruto
>=2300 - 15% do salário bruto
*/

function calcularImposto($salario){
    if($salario < 1300){
        echo "isento de imposto de renda";
    }

    else if($salario >1300 && $salario <2300){
        $imposto = $salario * 0.10;
        echo "deverá pagar de imposto de renda: $imposto reais";
    }

    else{
        $imposto = $salario * 0.15;
        echo "deverá pagar de imposto de renda: $imposto reais";
    }
}

calcularImposto(1000);