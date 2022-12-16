<?php

//Programa que recebe o saldo de uma conta poupança e
//imprima oa novo saldo, considerando o reajuste de 2%

$salario = 1200.40;

$reajuste = function($salario){
    $resultado =  $salario + $salario * 0.02;
    return $resultado = number_format($resultado,2,'.','');
};

echo "Com o reajuste, seu salário foi de $salario reais para \n";
echo $reajuste($salario) . " reais";