<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;

abstract class Conta {
    
    private static $numeroDeContas = 0;
    private static $numeroBanco = 22;
    private float $saldo = 0;
    private Titular $titular;

    public function __construct(Titular $titular){
        $this -> titular = $titular;
        self :: $numeroDeContas++;
    }

    public function __destruct(){
        self :: $numeroDeContas --;
    }

    public function sacar(float $valor){
        if($valor > $this -> saldo){
            echo 'Valor indisponível!';
        }
        else{
            $valor = $valor + $valor * $this -> tarifa();
            $this -> saldo -= $valor;
        }
    }

    abstract protected function tarifa() : float;

    public function depositar(float $valor): void{
        if($valor <=0 ){
            echo 'valor inválido!';
        }
        else{
            $this -> saldo += $valor;
        }
    }

    public function transferir(Conta $conta, float $valor): void{
        if($valor <=0 || $valor > $this -> saldo){
            echo 'Valor inválido, tente novamente';
        }
        else{
            $this -> saldo -= $valor;
            $conta -> saldo += $valor;
        }
    }

    public function saldo() :float{
        return $this -> saldo;
    }

    public static function numeroDeContas():int{
        return self ::$numeroDeContas;
    }

    public static function numeroBanco():int{
        return self :: $numeroBanco;
    }

    public function nomeTitular() :string{
        return $this -> titular -> nome();
    }

    public function cpfTitular() :CPF {
        return $this -> titular -> cpf();
    }
}