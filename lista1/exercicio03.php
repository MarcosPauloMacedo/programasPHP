<?php

//Programa que mostra nome endereco e telefone de um cliente

$dados = [
    'nome'=>'Marcos',
    'endereco'=>'Araguari',
    'telefone'=>'349998877665'
];

foreach ($dados as $informacoes){
    echo $informacoes . PHP_EOL;
}



