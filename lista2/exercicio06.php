<?php

//programa que recebe diversas idades e calcula a média

$idades = [22,11];
$minhaIdade = 26;

$media = function($valor){

    if(gettype($valor) != 'array'){
        return 'coloque os valores em um array';
    }

    $total = 0;
    for($i=0;$i<sizeof($valor);$i++){
        $total = $total + $valor[$i];
    }

    return $total / sizeof($valor);
};

echo $media($minhaIdade);
