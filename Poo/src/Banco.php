<?php
require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/CPF.php';

$cpfMarcos = new CPF('122321');

$marcos = new Titular('marcos',$cpfMarcos);

$primeiraConta = new Conta($marcos);

$primeiraConta -> depositar(100);

echo $primeiraConta -> cpfTitular();