<?php

namespace Alura\Banco\Model;

class Funcionarios extends Pessoa{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent:: __construct($nome,$cpf);
        $this -> cargo = $cargo;
    }

    public function cargo() :string
    {
        return $this -> cargo;
    }
}