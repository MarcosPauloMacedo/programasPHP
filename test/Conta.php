<?php

class Conta{
    private int $agencia;
    private int $conta;
    private float $saldo = 0;
    static int $numeroBanco = 44;

    public function __construct(int $agencia,int $conta)
    {
        $this -> agencia = $agencia;
        $this -> conta = $conta;
    }

    private function escreva(string $caractere):void
    {
        echo $caractere;
    }

    public function agencia() : int
    {
        return $this -> agencia;
    }

    public function conta() : int
    {
        return $this -> conta;
    }

    public function saldo() : float 
    {
        return $this -> saldo;
    }

    public function depositar(float $valor){
        if($valor <= 0)
        {
            $this -> escreva('Valor inválido! tente novamente');
        }
        else
        {
            $this -> saldo += $valor;
        }
    }

    public function sacar(float $valor)
    {
        if($valor <= 0 || $valor > $this -> saldo)
        {
            $this -> escreva('Valor inválido! tente novamente');
        }
        else
        {
            $this -> saldo += $valor;
        }
    }

    public function transferir(Conta $numeroConta, float $valor)
    {
        if($this -> conta == $numeroConta -> conta)
        {
            $this -> escreva('Não pode enviar dinheiro pra você mesmo');
            exit();
        }

        if($valor <= 0 || $valor > $this -> saldo)
        {
            $this -> escreva('Valor de transferencia inválido! tente novamente');
        }
        else{
            $numeroConta -> saldo += $valor;
            $this -> saldo -= $valor;
        }
    }
}