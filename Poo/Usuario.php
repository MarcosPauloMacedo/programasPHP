<?php

class Pessoa{
    public function __construct( string $nome, string $endereco)
    {
        $this -> nome = $nome;
        $this -> endereco = $endereco;
    }
}

$pessoa = new Pessoa('marcos','araguari');

var_dump($pessoa -> nome);

