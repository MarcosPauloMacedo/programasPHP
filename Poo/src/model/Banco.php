<?php

namespace Alura\Banco\Model;

require_once 'src/model/Conta/Conta.php';
require_once 'src/model/Endereco.php';
require_once 'src/model/Pessoa.php';
require_once 'src/model/Conta/Titular.php';
require_once 'src/model/CPF.php';

use Alura\Banco\Model\Conta\{Conta,Titular};
use Alura\Banco\Model\{CPF,Endereco,Funcionarios,Pessoa};

$endereco = new Endereco('Araguari','vieno','33','23');

echo $endereco -> cidade();



