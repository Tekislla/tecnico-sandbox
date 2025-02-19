<?php

require_once '../model/ProdutoCrud.php';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new ProdutoCrud();
        $produtos = $crud->getProdutos();
        include '../templates/cabecalho.php';
        include '../views/produto/index.php';
        include '../templates/rodape.php';
        break;

    case 'show':
        include '../templates/cabecalho.php';
        include '../views/produto/show.php';
        include '../templates/rodape.php';
        break;

    case 'inserir':
        echo 'voce escolheu inserir';
        break;

    default:
        echo 'aqui nao tem nada pra voce';
        break;
}