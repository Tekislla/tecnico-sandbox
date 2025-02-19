<?php

require_once "Conexao.php";

class Produto
{
    private $codigo;
    private $nome;
    private $preco;
    private $categoria;
    private $estoque;

    public function __construct($codigo, $nome, $preco, $categoria, $estoque)
    {
        $this->codigo    = $codigo;
        $this->nome      = $nome;
        $this->preco     = $preco;
        $this->categoria = $categoria;
        $this->estoque   = $estoque;
    }

    public function atualizar()
    {
        
    }

    public function excluir()
    {
        
    }
    
}
//TESTE PRODUTO
