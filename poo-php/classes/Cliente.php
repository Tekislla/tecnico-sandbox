<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 13/09/17
 * Time: 16:15
 */
class Cliente
{
    private $nome;
    public $cpf;
    public $endereco;

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        if (strlen($nome) > 1 ){
            $this->nome = $nome;
        }
    }
}

//instacia de Cliente
$gabriela = new Cliente("Gabriela Cordeiro", "123");















































