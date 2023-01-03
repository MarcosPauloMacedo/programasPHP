<?php

use Conta as GlobalConta;

class Conta {
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valor){
        if($valor > $this -> saldo){
            echo 'Valor indisponível!';
        }
        else{
            $this -> saldo -= $valor;
        }
    }

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
}

$conta1 = new Conta();
$conta2 = new Conta();

$conta1 -> depositar(100);
$conta1 -> transferir($conta2,50);

echo $conta2 -> saldo;


