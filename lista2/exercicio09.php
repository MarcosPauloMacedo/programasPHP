<?php

//simular funções de um banco, criando contas, métodos de transferir,sacar,etc...

function criarConta($agencia,$conta){
    $dados = [
        'agencia'=> $agencia,
        'conta'=> $conta,
        'saldo'=> 0
    ];

    return $dados;
}

function depositar(array $conta, float $valor) : array {
    if($valor < 1){
        echo'valor de depósito inválido';
    }

    else{
        $conta['saldo'] += $valor;
    }

    return $conta;
}

function sacar(array $conta,float $valor) : array {
    if($valor > $conta['saldo']){
        echo 'valor de saque maior que saldo';
    }

    else{ 
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

$conta1 = criarConta(002,223344);
$conta2 = criarConta(002,432123);
$conta3 = criarConta(002,544321);

$conta2 = depositar($conta2,500);
$conta1 = depositar($conta1,400);

$conta1 = sacar($conta1,100);

echo $conta1['saldo'] .PHP_EOL;
echo $conta2['saldo'];