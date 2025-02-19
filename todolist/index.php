<?php
    session_start();
    if(!empty($_GET['atividade'])) {
        $_SESSION['atividades'][] = $_GET['atividade'];
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Afazeres</title>
</head>
<body>

    <form method="get" action="">
        <input type="text" name="atividade" placeholder="Digite uma tarefa">
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Lista de Afazeres:</h2>

    <ol>
    <?php foreach($_SESSION[atividades] as $ativ ): ?>

            <li><?= $ativ; ?></li>

    <?php endforeach; ?>
    </ol>
    <!-- fecha listagem de atividades -->

</body>
</html>