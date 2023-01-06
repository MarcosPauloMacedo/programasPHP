<?php
require_once 'autoload.php';

use Alura\Banco\Model\Conta\{Conta,Titular};
use Alura\Banco\Model\{CPF,Endereco,Funcionarios,Pessoa};

$endereco = new Endereco('Araguari','vieno','33','23');

echo $endereco -> cidade();