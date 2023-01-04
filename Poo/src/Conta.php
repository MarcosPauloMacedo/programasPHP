<?php

class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static $numeroDeContas = 0;
    private static $numeroBanco = 22;

    public function __construct(string $cpf, string $nome){
        $this -> validarNome($nome);
        $this -> cpfTitular = $cpf;
        $this -> nomeTitular = $nome;

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

    private function validarNome(string $nome){
        if(strlen($nome) < 5){
            echo "Nome inválido! Nome menor que 5 caracteres";
            exit();
        }
    }

    public static function numeroDeContas():int{
        return self ::$numeroDeContas;
    }

    public static function numeroBanco():int{
        return self :: $numeroBanco;
    }
}


