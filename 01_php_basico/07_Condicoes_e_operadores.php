<?php 
/*Em PHP, as condições são usadas para tomar decisões com base em determinadas condições lógicas.
Você pode usar estruturas de controle condicionais, como if, else, elseif (ou else if), switch,
e operadores de comparação para implementar lógica condicional em seu código. 
Aqui estão exemplos de como usar essas estruturas: if e else:
O if é usado para executar um bloco de código se uma condição for verdadeira.
O else é usado para executar um bloco de código se a condição não for verdadeira. */
$idade = 18;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
/* elseif (ou else if):
O elseif permite verificar múltiplas condições em sequência. */
$nota = 75;
if ($nota >= 90) {
    echo "A";
} elseif ($nota >= 80) {
    echo "B";
} elseif ($nota >= 70) {
    echo "C";
} else {
    echo "F";
}
/* Operadores de Comparação:
Você pode usar operadores de comparação, como == (igual), != (não igual), 
> (maior que), < (menor que), >= (maior ou igual a), <= (menor ou igual a), para avaliar condições. */
$valor = 10;
if ($valor == 10) {
    echo "O valor é igual a 10.";
}
/* switch:
A estrutura switch é útil quando você precisa escolher entre muitos blocos de código 
diferentes com base no valor de uma expressão. */
$dia = "segunda";
switch ($dia) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "terça":
        echo "Hoje é terça-feira.";
        break;
    default:
        echo "Não sei que dia é hoje.";
}
/* Operadores Lógicos:
Você pode usar operadores lógicos como && (e), || (ou) e ! (não) para combinar condições. */
$idade = 25;
if ($idade >= 18 && $idade <= 30) {
    echo "Você é um adulto jovem.";
}
#Operador Ternário
#O operador ternário é uma forma concisa de escrever uma condição em uma única linha.
$idade = 16;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;  // Saída: Menor de idade
