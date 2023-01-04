<?php
class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function __construct(string $cpf, string $nome){
        $this -> cpfTitular = $cpf;
        $this -> nomeTitular = $nome;
    }

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

    public function saldo() :float{
        return $this -> saldo;
    }

    public function cpfTitular(): string{
        return $this -> cpfTitular;
    }

    public function nomeTitular(): string {
        return $this -> nomeTitular;
    }
}


