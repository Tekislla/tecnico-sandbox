<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 06/10/17
 * Time: 11:46
 */
require_once "Funcionario.php";

class Gerente extends Funcionario
{
    public $senhaCofre;
    public $quantidadeFuncionariosGerenciados;

    function __construct($nomeInformado)
    {
        parent::__construct($nomeInformado);
    }

}

//Crianças, nao façam isso em casa

$adolfo = new Gerente("Adolfo Chaves");