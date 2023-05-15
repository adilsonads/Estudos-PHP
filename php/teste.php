<?php
$num = 50;
$num2 = 10;

$num3 = $num + $num2;

if($num <= 18){
    echo "Menor que 18" . PHP_EOL;
    echo $num3;
}else{
    echo "Maior que 18" . PHP_EOL;
    echo $num3;
}