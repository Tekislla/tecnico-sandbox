<?php

require 'classes/Conta.php';
require 'classes/Cliente.php';

 $minhaConta = new Conta();
 $minhaConta ->deposita(500);

 $contaPoupança = new Conta();
 $contaPoupança->deposita(15);

 echo "total de contas do banco: ". Conta::$totalContas;