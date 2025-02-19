<?php

require "classes/Cliente.php";

$clienteJunior = new cliente();
$clienteJunior->setNome("João Pedro Lazarim de Souza");
$clienteJunior->cpf = "043.564.345-19";
$clienteJunior->endereco = "Rua Botafogo";

print_r($clienteJunior);

$clienteSenior = new cliente();
$clienteSenior->setNome("Joesley");
$clienteSenior->cpf = "573.344.331-94";
$clienteSenior->endereco = "Rua Corinthians";

print_r($clienteSenior);


