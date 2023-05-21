<?php

function exibirNome ($nome){
    echo "Meu nome é $nome" . PHP_EOL;
}
exibirNome("Adilson");

function calcularMedia($nome,$n1,$n2,$n3,$n4){
    $media = ($n1+$n2+$n3+$n4) /4;
    if($media <5){
        echo "$nome foi reprovado com uma nota média de: $media ";
    }else{
    echo "$nome foi aprovado com nota média de: $media";
    }
}
calcularMedia('Adilson',1,1,7,8);