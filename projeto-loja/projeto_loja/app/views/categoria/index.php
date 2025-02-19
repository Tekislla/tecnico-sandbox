<div class="ui container">
    <div class="ui big aligned divided list" >
        <br>
        <h1 style="margin-left: 1%;"> <i class="tags icon"></i> Lista de Categorias</h1>

        <br><br>

        <?php foreach($categorias as $categoria) : ?>
            <div class="item">
                <div class="content">
                     <a style="margin-left: 1.5%;" href="app/controller/categorias.php?acao=show&id=<?= $categoria->getId()?>">
                         <i class="chevron right icon"></i> <?= utf8_encode($categoria->getNome()) ?>
                    </a>
                </div>
            </div>

        <?php endforeach; ?>

        <div class="ui inverted section divider"></div>
    </div>
</div>