<?php

class Filha{ //Ao usarmos o final em uma classe, ela não pode ser herdada
    private function funcaoTeste(){
        echo "Chamando função teste";
    }
    protected function hello2(){ //Definindo uma propriedade como protected, ainda da pra chamar mas tem que referenciar
        echo "Chamando Hello world 2";
    }
    public function hello(){
        echo "Hello World";
    }
}

class Pai extends Filha{
    public function bye(){
        parent::hello(); //Chamando o hello da classe pai, parent é usado quando quer usar função com o mesmo nome da classe pai
        echo "Bye World";
        $this->hello2(); //Chamando o hello2 da classe pai, pois hello2 foi definido como protected, dai basta referenciar o hello2
    }
}

$pai = new Pai();
$pai->bye();
echo "<br>";
$filha = new Filha();
$filha->hello();
echo "<br>";
