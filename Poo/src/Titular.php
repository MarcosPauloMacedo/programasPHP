<?php

class Titular{

    public function __construct(string $nome, CPF $cpf){
        $this -> validarNome($nome);
        $this -> nome = $nome;
        $this -> cpf = $cpf;    
    }

    public function nome():string {
        return $this -> nome;
    }

    public function cpf():string {
        return $this -> cpf -> mostrarCPF();
    }

    private function validarNome(string $nome){
        if(strlen($nome) < 5){
            echo "Nome inválido! Nome menor que 5 caracteres";
            exit();
        }
    }
}