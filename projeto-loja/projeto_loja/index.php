<?php

require_once 'app/model/CategoriaCrud.php';
require_once 'app/model/ProdutoCrud.php';


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}
switch ($acao){
    case 'index';
        $catcrud = new CategoriaCrud();
        $categorias = $catcrud->getCategorias();

        $prodcrud = new ProdutoCrud();
        $produtos = $prodcrud->getProdutos();

        include 'templates/cabecalho.php';
        include 'app/views/principal/index.php';
        break;
}

