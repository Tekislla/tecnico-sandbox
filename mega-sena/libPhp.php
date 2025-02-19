<?php

function sorteiaNums(string $jogoEscolhido, int $quantNums){
    $jogos = ['Mega Sena' => 60, 'Quina' => 80, 'Lotomania' => 100, 'Lotofácil' => 25];

    $numsSorteados = [0];
    $qntMax = $jogos[$jogoEscolhido];

    for ($i=0; $i < $quantNums; $i++){
        $sorteio = rand(1,$qntMax);
        $count = count($numsSorteados);

        for ($j = 0; $j < $count; $j++) {
            if ($sorteio == $numsSorteados[$j]){
                $sorteio = rand(1,60);
                $j = 0;
            }
        }

        $numsSorteados[$i] = $sorteio;

    }

    sort($numsSorteados);

    return $numsSorteados;
} //Sorteia os numeros

function valor(string $jogoEscolhido, int $quantNums, int $quantApostas){
    $precos = [
        'Mega Sena' => [6  => 3.5, 7 => 24.5, 8 => 98, 9 => 294, 10 => 735, 11 => 1617, 12 => 3234, 13 => 6006, 14 => 10510.50, 15 => 17517.50],
        'Quina'     => [5  => 1.5, 6 => 9, 7 => 31.5, 8 => 84, 9 => 189, 10 => 378, 11 => 693, 12 => 1188, 13 => 1930.5, 14 => 3003, 15 => 4504.5],
        'Lotomania' => [50 => 1.5],
        'Lotofácil' => [15 => 2, 16 => 32, 17 => 272, 18 => 1632]
    ];

    $valor = $precos[$jogoEscolhido][$quantNums] * $quantApostas;

    return $valor;
} // Retorna valor

print_r(sorteiaNums('Lotomania', 50));