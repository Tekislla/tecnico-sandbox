
<h1 style="margin-left: 1.5%"><i class="tag icon"></i> Detalhes da Categoria - <?= utf8_encode($categoria->getNome()) ?>:</h1>
<p style="margin-left: 7%"><?= utf8_encode($categoria->getDescricao()) ?></p>

<a href="../../controller/categorias.php?acao=editar&id=<?= $categoria->getId()?>"><button class="ui submit button" name="gravar" value="Gravar" style="float: left; margin-left: 2%; ">Editar</button></a>

<a href="../../controller/categorias.php?acao=excluir&id=<?= $categoria->getId()?>"><button class="ui submit button" name="excluir" value="Excluir" style="float: left; margin-left: 2%; ">Excluir</button></a>
