<?php
        function calc ($ipInformado, $mask){


            $enderecos = floor(pow(2,(32-$mask)));
            $subredes = floor(256 / $enderecos);
            $hosts = $subredes - 2;
            $ip = explode("." , "$ipInformado");
            $a = $ip[3] / $enderecos;
            $firstHost = floor($a) * $enderecos + 1;
            $lastHost = $firstHost + ($enderecos - 3);
            $broadcast = $lastHost + 1;
            $maskDecimal = 256 - $enderecos;

            if ($hosts < 0) {
            	$hosts = 0;
            }

            if ($subredes < 0) {
            	$subredes = 0;
            }


            switch ($ipInformado){
                case $ipInformado >= 0 AND $ipInformado <= 127:
                    $classe =  "Classe A";
                    break;

                case $ipInformado >= 128 AND $ipInformado <= 191:
                    $classe = "Classe B";
                    break;

                case $ipInformado >=192 AND $ipInformado <= 223:
                    $classe = "Classe C";
                    break;

                case $ipInformado >= 240 AND $ipInformado <= 255:
                    $classe = "Classe D";
                    break;
            }

            switch ($ipInformado){
                case $ipInformado >= 10 AND $ipInformado <= 10.255:
                    $classeIp =  "Privado";
                    break;

                case $ipInformado >= 172.16 AND $ipInformado <= 172.31:
                    $classeIp = "Privado";
                    break;

                case $ipInformado >=192.168 AND $ipInformado <= 172.169:
                    $classeIp = "Privado";
                    break;

                default:
                    $classeIp = "Público";
                    break;
            }


            $ar = ['enderecos' => $enderecos,
                'subredes' => $subredes,
                'hosts' => $hosts,
                'primeiro endereco de host' => "$ip[0].$ip[1].$ip[2].$firstHost",
                'ultimo endereco de host' => "$ip[0].$ip[1].$ip[2].$lastHost",
                'broadcast' => "$ip[0].$ip[1].$ip[2].$broadcast",
                'mascara de rede' => "255.255.255.$maskDecimal",
                'classe do ip' => $classe,
                'tipo do ip' => $classeIp
            ];

            return $ar;

        }

    if (isset($_GET['ip'])){
        $ip = $_GET['ip'];
        $mask = $_GET['mask'];
        $calculo = json_encode(calc($ip, $mask));
        header("Conten-type: application/json");
        echo $calculo;
    }

