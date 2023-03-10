<?php

require_once './autoload.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\Titular;

class ContaPoupanca extends Conta{
    public function __construct(Titular $titular)
    {
        parent :: __construct($titular);
    }

    protected function tarifa(): float
    {
        return 0.03;
    }
}

