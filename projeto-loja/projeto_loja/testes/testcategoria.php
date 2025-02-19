<?php

    require_once '../model/Produto.php';
//    require_once '../model/Categoria.php';
    require_once '../model/CategoriaCrud.php';

    $p1 = new Produto(1,"Tv Samsung 64", "Tv 4k muito foda limpa, passa e cozinha com 64 fuckings polegadas", "assetes/imagens/tv.jpg", "20000", 1);

    var_dump($p1);





$c1 = new Categoria(null, 'Imóveis', 'Ofertas de imóveis');

$crud = new CategoriaCrud();
$r = $crud->insertCategoria($c1);

print $r;