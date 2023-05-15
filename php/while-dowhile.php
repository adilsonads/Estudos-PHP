<?php

$contador = 1;


echo "UTILIZANDO SOMENTE O WHILE" . PHP_EOL;
while ($contador <= 10){
    echo "Contador é $contador" . PHP_EOL;
    $contador++;
    }
echo "UTILIZANDO DO - WHILE" . PHP_EOL;
$contador = 1;

do {
    echo "Contador é $contador" . PHP_EOL;
    $contador++;
} while ($contador <= 10);