<?php
    require_once '../model/CategoriaCrud.php';

        if (isset($_GET['acao'])){
            $acao = $_GET['acao'];
        }else{
            $acao = 'index';
        }

        switch($acao){
            case 'index':

                $crud = new CategoriaCrud();
                $categorias = $crud->getCategorias();
                include '../../templates/cabecalho.php';
                include '../views/categoria/index.php';
                include '../../templates/rodape.php';
                break;

            case 'show':
                $id = $_GET['id'];
                $crud = new CategoriaCrud();
                $categoria = $crud->getCategoria($id);
                include '../../templates/cabecalho.php';
                include '../views/categoria/show.php';
                include '../../templates/rodape.php';
                break;

            case 'inserir':
                if (!isset($_POST['gravar'])){//se o submit enviar nao estivar setado
                    include '../../templates/cabecalho.php';
                    include '../views/categoria/inserir.php';
                    include '../../templates/rodape.php';
                }else{
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $categoria = new Categoria($nome,$descricao);
                    $crud = new CategoriaCrud();
                    $crud->insertCategoria($categoria);

                    header('Location: categorias.php');
                }
                break;

            case 'editar':
                if (!isset($_POST['gravar'])) {//se o submit enviar nao estivar setado
                    $id = $_GET['id'];
                    $crud = new CategoriaCrud();
                    $categoria = $crud->getCategoria($id);
                    include '../../templates/cabecalho.php';
                    include '../views/categoria/editar.php';
                    include '../../templates/rodape.php';
                }else{
                    $id = $_POST['id'];
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $categoria = new Categoria($nome,$descricao,$id);
                    $crud = new CategoriaCrud();
                    $crud->updateCategoria($categoria);

                    header('Location: categorias.php');

                }
                break;

            case 'excluir':
                $id = $_GET['id'];
                $crud = new CategoriaCrud();
                $crud->deleteCategoria($id);

                header('Location: categorias.php');
        }

