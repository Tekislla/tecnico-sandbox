<?php
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if($existe == false){
        header("Location: login.php");
    }

    require 'controlador_agenda.php';

    if ($_GET['acao'] != 'buscar'){
        $meusContatos = pegarContatos();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container" style="margin-top: 30px;">


    <a href="verifica_usuario.php?acao=sair"><button class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span></button></a>
    <h1 align="center">Bem vindo à agenda pica!</h1>
    <h4 align="center">João e Guilherme - 2 INFO 2</h4>
    <br>
    <h6 align="center">(tente cadastrar e editar um contato rsrs)</h6>
    <br>
    <br>
    <br>

    <!-- CADASTRO-->
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline" action="controlador_agenda.php?acao=cadastrar" method="post" >



                <!--nome-->
                <div class="col-md-3">
                    <label for="nome"></label>
                    <input name="nome" required type="text" class="form-control" id="nome" placeholder="Nome">
                </div>

                <!--email-->
                <div class="col-md-3">
                    <label for="email"></label>
                    <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
                </div>

                <!--telefone-->
                <div class="col-md-4">
                    <label for="telefone"></label>
                    <input name="telefone" required type="text" class="form-control" id="telefone" placeholder="Telefone">
                </div>

                <button type="submit" class="btn btn-success">Cadastrar
                    <span class="glyphicon glyphicon-save"></span>
                </button>
                <br><br>

            </form>
            <div class="row">
                <div class="col-md-10" style="margin-left: 19px">
                    <form action="index.php?acao=buscar" method="post">
                        <div class="input-group col-md-10" style="float: left">
                            <input type="text" required class="form-control" id="busca" name="busca" value="<?= $_POST['busca'] ?>" placeholder="Pesquisar Contato">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit"> Pesquisar
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div class="input-group-btn">
                        </div>
                        <?php if ($_GET['acao'] == 'buscar'): ?>
                            <div class="form-group  col-md-1">
                                <a class="btn btn-info form-group" style="float: right"  href="index.php">
                                    <span class="glyphicon glyphicon-refresh" </span></a>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <!--CONTATOS-->
    <div class="row">
        <div class="col-md-12">

            <!-- Conteúdo -->
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <!-- repetir -->
                <?php foreach ($meusContatos as $contato): ?>
                    <tr>
                        <td><?= $contato['id'] ?>      </td>
                        <td><?= $contato['nome'] ?>    </td>
                        <td><?= $contato['email'] ?>   </td>
                        <td><?= $contato['telefone'] ?></td>
                        <td>
                            <a href="controlador_agenda.php?acao=excluir&id=<?= $contato['id'] ?>">
                                <button type="submit" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                            </a>
                            <a href="formulario_editar_contato.php?id=<?= $contato['id'] ?>">
                                <button type="submit" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>