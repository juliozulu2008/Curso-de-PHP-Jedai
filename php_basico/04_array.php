<?php
# arrays
$frutas = array("Maçã", "Banana", "Laranja");
// ou, a partir do PHP 5.4, usando a sintaxe []:
$frutas = ["Maçã", "Banana", "Laranja"];
#array associativo
$aluno = array(
    "nome" => "João",
    "idade" => 25,
    "nota" => 9.5
);
// ou, a partir do PHP 5.4, usando a sintaxe []:
$aluno = [
    "nome" => "João",
    "idade" => 25,
    "nota" => 9.5
];
# acessando valores em um array
echo $frutas[0];  // Saída: Maçã
echo $aluno["nome"];  // Saída: João
# adicionando valores em um array
$frutas[] = "Pera";  // Adiciona "Pera" ao final do array $frutas
$aluno["cidade"] = "São Paulo";  // Adiciona a chave "cidade" ao array $aluno
# exemplo de uso de funbçoes com array
$idades = [30, 25, 35, 40];
$quantidade = count($idades);  // Retorna 4 (número de elementos)

array_push($idades, 50);  // Adiciona 50 ao final do array
array_pop($idades);  // Remove o último elemento (50)

$outras_idades = [28, 22];
$todas_idades = array_merge($idades, $outras_idades);  // Mescla os dois arrays
# exemlo de iterçoes com array
$frutas = ["Maçã", "Banana", "Laranja"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
