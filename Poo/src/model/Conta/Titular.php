<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;

class Titular extends Pessoa{

    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent:: __construct($nome,$cpf); 
        $this -> endereco = $endereco;
    }

    public function endereco() :Endereco
    {
        return $this -> endereco;
    }
}