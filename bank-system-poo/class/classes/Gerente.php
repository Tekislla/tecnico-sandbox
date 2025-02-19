<?php

require_once "Funcionario.php";

class Gerente extends Funcionario
{
    public $senhaCofre;
    public $quantidadeFuncionariosGerenciados;

    function __construct($nomeInformado)
    {
        parent::__construct($nomeInformado);
    }

    public function alteraNome()
    {
        $this->nome = "Nome Alterado";
    }

    public function getBonificacao()
    {
        return parent::getBonificacao() + $this->salario * 0.05;
    }

}