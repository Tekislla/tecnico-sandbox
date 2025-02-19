<?php

require_once "Conexao.php";
require_once "Produto.php";

class CrudProdutos
{
    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrar($produto)
    {
        $sql = "INSERT INTO tb_produtos(nome, preco, categoria, estoque) VALUES ('$produto->nome', $produto->preco, '$produto->categoria', $produto->estoque)";

        $this->conexao->exec($sql);
    }

    public function buscar(int $codigo)
    {
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE codigo = $codigo");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        return $produto;
    }

    public function getProdutos()
    {
        $sql = "SELECT * FROM tb_produtos";

        $consulta = $this->conexao->query($sql);
        $listaProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $listaProdutos;
    }
}
