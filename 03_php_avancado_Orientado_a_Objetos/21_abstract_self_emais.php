<?php
abstract class teste{ // classe abstrata, nao pode ser instanciada, usada Principalmente como moldes de classes
    public function teste(){
        echo "Teste";
    }

    abstract public function teste2();
}

class Principal extends teste{
    public function teste(){
        parent::teste();
    }

    public function teste2(){
        echo "Teste2"; // metodo abstrato
    }

    public static function Metodoestatico(){
        echo "Metodo estatico";
    }

    public function teste3(){
        echo "Teste3";
    }
}

$principal = new Principal();
$principal->teste();
echo "<br>";
$principal->teste2();
echo "<br>";
$principal::Metodoestatico();
echo "<br>";
$principal->teste3();

?>