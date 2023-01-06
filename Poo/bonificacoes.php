<?php

require_once './autoload.php';

use Alura\Banco\Service\ControlarBonificacao;
use Alura\Banco\Model\{CPF,Funcionarios};


$umFuncionario = new Funcionarios(
    'Mario',
    new CPF('123321'),
    'programador',
    '6000');

$umafuncionaria = new Funcionarios(
    'Maria',
    new CPF('22332234'),
    'programadora',
    '6000');

$controlador = new ControlarBonificacao();
$controlador -> adicionarBonificacao($umFuncionario);
$controlador -> adicionarBonificacao($umafuncionaria);

echo $controlador -> recuperarTotal();

