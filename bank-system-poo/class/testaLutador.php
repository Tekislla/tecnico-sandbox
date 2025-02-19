<?php

require_once "classes/Lutador.php";

$saitama = new lutador("Saitama", 23, 78, 50, 0);
$saitama->ganhaLuta(3);
$saitama->perdeLuta(5);
$saitama->apresenta();
print_r($saitama);