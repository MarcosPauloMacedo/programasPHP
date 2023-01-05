<?php

namespace Alura\Banco\Model;

class CPF{
    public string $cpf;
    
    public function __construct(string $cpf){
        $this -> cpf = $cpf;
    }

    public function mostrarCPF():string{
        return $this -> cpf;
    }
}