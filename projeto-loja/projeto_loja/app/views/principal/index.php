<html>

<head>
    <meta charset="UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/principal.css">

    <script>
        $(document).ready(function (){

            $("#abas ul li").addClass("selecionado");

            $("#abas ul li").click(function (){

                $(this).toggleClass("selecionado");

                var idAba = $(this).attr("id");

                $("."+idAba).toggle();
            });
        });
        </script>
</head>

<body>

        <div class="ui aligned divided list" >
            <div id="abas">
                <ul>

                    <?php foreach($categorias as $categoria) :?>

                        <li id="aba<?= $categoria->getId()?>"> <?= utf8_encode($categoria->getNome())?> </li>

                    <?php endforeach; ?>


                </ul>
            </div>
            <div id="conteudos" class="item">
                <div class="content">

                        <?php foreach($produtos as $produto) :?>
                            <div class= "conteudo aba<?= utf8_encode($produto->getIdCategoria()); ?>">
                        <?= utf8_encode($produto->getNome())?>
                    </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>


</body>

</html>
