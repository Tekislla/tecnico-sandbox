<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 13/09/17
 * Time: 16:19
 */

 require_once "classes/Cliente.php";

 $clienteJunior = new Cliente();
 //$clienteJunior->nome = 1000;
 $clienteJunior->setNome("João");

 $clienteJunior->cpf = "987654321";
 $clienteJunior->endereco = "Av. Getulio Vargas - Araquari";

 print_r($clienteJunior);

$clienteSenior = new Cliente();
//$clienteJunior->nome = 1000;
$clienteSenior->setNome("Geronimo");

$clienteSenior->cpf = "987654321";
$clienteSenior->endereco = "Av. Juscelino - Araquari";

print_r($clienteSenior);


