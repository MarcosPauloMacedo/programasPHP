<?php

//Programa que leia o valor de um produto, o percentual 
//do desconto desejado e imprima o valor do desconto e
//o valor do produto subtraindo o desconto.

$valorProduto = 500;
$porcentagemDesconto = 5;

$desconto = function($valor,$desconto){
    $cent = $desconto / 100;
    return $valor * $cent;
};

$promocao = function($valor,$desconto){
    $cent = $desconto / 100;
    return $valor - $valor * $cent;
};

echo "Dado o valor de $valorProduto reais, um desconto de \n";
echo "$porcentagemDesconto % será de ";
echo $desconto($valorProduto,$porcentagemDesconto) . ' reais.' . PHP_EOL .PHP_EOL;

echo "Portanto, o valor do produto com o desconto será de \n";
echo $promocao($valorProduto,$porcentagemDesconto) .' reais.';



