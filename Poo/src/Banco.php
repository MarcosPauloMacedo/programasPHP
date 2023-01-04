<?php
require_once './src/Conta.php';

$conta1 = new Conta('123321','marcos');
$conta1 -> depositar(500);

$conta2 = new Conta('123321','maria');
$conta2 = new Conta('23332','antonio');

new Conta('132213','josé');


echo Conta :: numeroDeContas() .PHP_EOL;
//echo Conta :: numeroBanco();


