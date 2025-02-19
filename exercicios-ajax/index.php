<!doctype html>
<html lang="pt">
<head>
    <title>Exercício 1 - Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            //Exercício 1
            $("#ex1").click(function () {
                $("#principal").load("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/categorias.php");
            });
            //Exercício 2
            $("#ex2").click(function(){
                $.get("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/categorias.php", function(data){
                    $("#principal").html(data);
                });
            });
            //Exercício 3
            $("#ex3").click(function(){
                $.get("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/produtos.php",
                    {
                        categoria: $("#categoria").val()
                    },
                function(data){
                    $("#principal").html(data);
                });
            });
            //Exercício 4
            $("#ex4").click(function(){
                $.get("http://hawkman.fabricadesoftware.ifc.edu.br/~rafael/lojinha/ajax/dados_json.php", function(data){
                    $("#principal").append("IES: " + data.ies + "<br>");
                    $("#principal").append("Campus: " + data.campus + "<br>");
                    $("#principal").append("Cursos: " + data.cursos + "<br>");
                    $("#principal").append("Endereço: " + data.endereco + "<br>");
                    $("#principal").append("Município: " + data.municipio + "<br>");
                    $("#principal").append("Estado: " + data.uf + "<br>");
                });
            });


        });

    </script>
</head>
<body>

<button id="ex1">Exercício 1</button>
<br><br>
<button id="ex2">Exercício 2</button>
<br><br>
<form method="get">
    <input type="number" id="categoria" placeholder="Digite o código da categoria" >
    <input type="button" value="Exercício 3" id="ex3">
</form>
<br><br>
<button id="ex4">Exercício 4</button>

    <div id="principal">

    </div>

</body>
</html>

<!--