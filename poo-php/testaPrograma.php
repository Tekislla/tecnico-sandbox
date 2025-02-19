<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 30/08/17
 * Time: 16:11
 */


require 'classes/Conta.php';
require 'classes/Cliente.php';


$minhaConta = new Conta();
$minhaConta->deposita(500);

$contaPoupanca = new Conta();
$contaPoupanca->deposita(15);

new Conta();

echo "Total de contas do banco: ".Conta::$totalContas;