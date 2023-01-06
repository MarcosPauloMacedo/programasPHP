<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionarios;

class ControlarBonificacao{
    
    private $totalBonificacao = 0;

    public function adicionarBonificacao(Funcionarios $funcionario)
    {
        $this -> totalBonificacao += $funcionario -> bonificacao();
    }

    public function recuperarTotal() :float
    {
        return $this -> totalBonificacao;
    }
}