<html>
    <head>
        <title>Teste</title>
        <link rel="stylesheet" href="../../../assets/css/teste.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
               $("#abas ul li").click(function () {
                    $("#abas ul li").removeClass("selecionado");

                    $(this).addClass("selecionado");
               });

                $("#aba1").click(function(){
                    $("#cont2").hide();
                    $("#cont3").hide();
                    $("#cont1").show();
                });


                $("#aba2").click(function(){
                    $("#cont1").hide();
                    $("#cont3").hide();
                    $("#cont2").show();
                    });

                $("#aba3").click(function(){
                    $("#cont1").hide();
                    $("#cont2").hide();
                    $("#cont3").show();
                });

            });
        </script>

    </head>

    <body>

        <div id="abas">
            <ul>
                <li id="aba1">Aba 1</li>
                <li id="aba2">Aba 2</li>
                <li id="aba3">Aba 3</li>
            </ul>
        </div>

        <div class="conteudos">
            <div class="conteudo" id="cont1">
                conteudo 1
            </div>
            <div class="conteudo" id="cont2">
                conteudo 2
            </div>
            <div class="conteudo" id="cont3">
                conteudo 3
            </div>
        </div>

    </body>
</html>