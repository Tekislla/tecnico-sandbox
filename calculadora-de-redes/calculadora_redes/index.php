<html>
<head>

    <meta charset="UTF-8">
    <title>Calculadora de Redes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#dados").hide();
            $('#enviar').click(function () {
                $.get("functions.php",
                    {
                    ip: $('#ip').val(),
                    mask: $('#mascara').val()
                }, function (dados) {
                        var dbParam = JSON.parse(dados);
                        var txt = '';
                        for (x in dbParam) {
                            txt += "<td>" + dbParam[x] + "</td>";
                        }
                        document.getElementById("conteudo").innerHTML = txt;

                    $("#dados").show(500);

                })
            })
        })
    </script>

</head>

<body>

<div class="container" style="margin-top: 50px">

<div>
    <form class="form-inline">
        <div class="form-group mb-2">
            <input type="text" name="ip" class="form-control" id="ip" placeholder="IP (xxx.xxx.xxx.xxx)" maxlength="15">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            
            <input type="text" name="mask" placeholder="Máscara em bits (xx)" class="form-control" id="mascara" maxlength="2">
        </div>
        <div class="btn btn-primary mb-2" id="enviar">Enviar</div>
    </form>

</div>

<table class="table" id="dados">
    <thead>
    <tr>
        <th scope="col">Endereços</th>
        <th scope="col">Sub-redes</th>
        <th scope="col">Hosts</th>
        <th scope="col">Primeiro Endereço</th>
        <th scope="col">Ultimo Endereço</th>
        <th scope="col">Broadcast</th>
        <th scope="col">Máscara de Rede</th>
        <th scope="col">Classe do ip</th>
        <th scope="col">Tipo do ip</th>
    </tr>
    </thead>
    <tbody>
    <tr id="conteudo">

    </tr>

    </tbody>
</table>

</div>
</body>

</html>
