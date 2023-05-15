<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome . " de ". $this->idade ." esta praticando PHP " . PHP_EOL;
    }
}

$adilson = new Pessoa();
$adilson->nome = "Adilson Carlos da Costa Junior";
$adilson->idade = 29;
$adilson->Falar();
var_dump($adilson);

echo $adilson->Falar();