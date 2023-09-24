<?php 

class Pessoa{
    public $nome = "julio";
    public $idade = 27;
    private $peso = 116.5;


    public function comer() {
        echo "Estou comendo ";
    }

    public function falar() {
        echo "Estou falando";       
    }
}

$pessoa = new Pessoa;

$pessoa->comer();
$pessoa->falar();
