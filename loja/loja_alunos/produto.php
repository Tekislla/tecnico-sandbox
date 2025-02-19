<?php

    require_once "classes/CrudProdutos.php";
    $crud = new CrudProdutos();
    $produto = $crud->buscar(1);

    print_r($produto);
?>

<h2>Página de Produto</h2>