<?php

require 'classes/Conta.php';

$minhaConta = new conta();
$minhaConta -> dono = "João Pedro Lazarim";
$minhaConta -> deposita(1000);
$conseguiSacar = $minhaConta -> saca(400);

echo ($conseguiSacar) ? 'Saque efetuado com sucesso!' : 'Não foi possível realizar o saque!';

$meuSonho = new conta();
$meuSonho -> dono = "João Pedro Lazarim";
$meuSonho -> deposita(100000);

$meuSonho->transferePara($minhaConta, 10000);

print "\nO cliente {$minhaConta->dono} tem saldo de {$minhaConta->getSaldo()}!\n\n";