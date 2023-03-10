<?php

namespace Alura\Banco\Model;

class Funcionarios extends Pessoa{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent:: __construct($nome,$cpf);
        $this -> cargo = $cargo;
        $this -> salario = $salario;
    }

    public function cargo() :string
    {
        return $this -> cargo;
    }

    public function salario() : float
    {
        return $this -> salario;
    }

    public function bonificacao() : float
    {
        return $this -> salario * 0.1;
    }
}