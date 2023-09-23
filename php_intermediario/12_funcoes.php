<?php 

/*

Em PHP, uma função é um bloco de código que pode ser reutilizado para executar uma tarefa específica.
As funções permitem que você agrupe um conjunto de instruções e as chame pelo nome, 
o que torna seu código mais organizado, legível e reutilizável. 
Aqui está a sintaxe básica para criar e chamar funções em PHP:

Definindo uma Função:

php
Copy code
function nomeDaFuncao($parametro1, $parametro2, ...) {
    // Código da função
    return $resultado; // Opcional: retorna um valor
}
function: É a palavra-chave que define uma função em PHP.
nomeDaFuncao: É o nome da função que você escolhe.
$parametro1, $parametro2, ...: São os parâmetros que a função pode receber. Eles são opcionais.
return: É usado para retornar um valor opcional da função.

*/

function saudacao($nome) {
    return "Olá, $nome!";
}

$mensagem = saudacao("Alice");
echo $mensagem; // Saída: Olá, Alice!

#Passagem de Parâmetros:
function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(5, 3);
echo $resultado; // Saída: 8

#Valor de Retorno:
function quadrado($numero) {
    return $numero * $numero;
}

$resultado = quadrado(4);
echo $resultado; // Saída: 16

#Funções com Parâmetros Opcionais:

function sauda($nome = "Visitante") {
    return "Olá, $nome!";
}

echo sauda();      // Saída: Olá, Visitante!
echo sauda("Bob"); // Saída: Olá, Bob!

#Funções Recursivas:
/* 

Uma função recursiva é aquela que chama a si mesma. 
Isso é útil para resolver problemas que podem ser quebrados em casos menores do mesmo problema.

*/
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

echo fatorial(5); // Saída: 120



