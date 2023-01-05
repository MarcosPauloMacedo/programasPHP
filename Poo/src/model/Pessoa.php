<?php

namespace Alura\Banco\Model;

class Pessoa{
   protected string $nome;
   protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this -> validarNome($nome);  
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    public function nome() :string
    {
        return $this -> nome;
    }

    public function cpf() :CPF
    {
        return $this -> cpf;
    }

    private function validarNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome inválido! Nome menor que 5 caracteres";
            exit();
        }
    }
    
}