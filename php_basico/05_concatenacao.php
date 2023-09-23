<?php 
#Concatenaçao
# Concatenr duas strings
$nome = "João";
$sobrenome = "Silva";
$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;  // Saída: João Silva
#Concatenar strings com texto adicional
$fruta = "Maçã";
$mensagem = "Gosto de " . $fruta . "s.";
echo $mensagem;  // Saída: Gosto de Maçãs.
#Concatenar strings em um loop
$nomes = ["Alice", "Bob", "Carol"];
$lista = "Nomes: ";
foreach ($nomes as $nome) {
    $lista .= $nome . ", ";
}
$lista = rtrim($lista, ", "); // Remove a vírgula e espaço em branco no final
echo $lista;  // Saída: Nomes: Alice, Bob, Carol
# Uso do operador de atribuição de concatenação (`.=)
$mensagem = "Olá, ";
$nome = "Maria";
$mensagem .= $nome;
echo $mensagem;  // Saída: Olá, Maria
