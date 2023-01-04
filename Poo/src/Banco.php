<?php
require_once './src/Conta.php';

$conta1 = new Conta('marcos','araguari');
$conta1 -> depositar(500);

var_dump($conta1 -> cpfTitular());


