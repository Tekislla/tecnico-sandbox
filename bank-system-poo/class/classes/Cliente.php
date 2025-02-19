<?php

/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/09/17
 * Time: 16:15
 */
class cliente
{
    private $nome;
    public $cpf;
    public $endereco;

    function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        if (strlen($nome) > 1) {

        $this->nome = $nome;
        }
    }

}
