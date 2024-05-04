<?php 

include("Exemplo.class.php");
//instancia de um objeto!
$exemplo = new Exemplo();
// se deixar passar erro fatal
//$exemplo->var1 = "Ola"; IDE nao reconhece isso pois esta private
$exemplo->var2 = "Mundo";
//variável estática
echo Exemplo::$var3;  // Saída: Estática