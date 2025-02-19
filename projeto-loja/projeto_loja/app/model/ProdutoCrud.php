<?php

require_once 'DBConnection.php';
require_once 'Produto.php';

class ProdutoCrud{
    private $conexao;

    public function __construct()
    {
        $this->conexao = DBConnection::getConexao();
    }

    public function getProdutos(){
        $sql = "SELECT * FROM produto";
        $resultado = $this->conexao->query($sql);

        $arr_prod = $resultado->fetchALL(PDO::FETCH_ASSOC);

        $listaObjsProd = [];

        foreach ($arr_prod as $prod) {
        $id = $prod['id_produto'];
        $nome = $prod['nome_produto'];
        $descricao = $prod['descricao_produto'];
        $foto = $prod['foto_produto'];
        $preco = $prod['preco_produto'];
        $id_categoria = $prod['id_categoria'];

        $objProd = new Produto($id, $nome, $descricao, $foto, $preco, $id_categoria);
        $listaObjsProd[] = $objProd;
        }
        return $listaObjsProd;
    }
}
