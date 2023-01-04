<?php

class CPF{
    public function __construct(string $cpf){
        $this -> cpf = $cpf;
    }

    public function mostrarCPF():string{
        return $this -> cpf;
    }
}