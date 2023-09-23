<?php 
/* Em PHP, um array multidimensional é um array que contém outros arrays como seus elementos. 
Isso permite que você crie estruturas de dados mais complexas, 
como matrizes (tabelas) e arrays associativos aninhados. 
Vou mostrar como criar e trabalhar com arrays multidimensionais em PHP. */
// Um array multidimensional representando uma tabela de notas de alunos
$notas = array(
    array("Alice", 85, 90, 88),
    array("Bob", 78, 92, 80),
    array("Carol", 90, 88, 75)
);
#Acessando Elementos em um Array Multidimensional:
// Acessando as notas de Bob
$nome = $notas[1][0]; // $nome agora é "Bob"
$nota1 = $notas[1][1]; // $nota1 agora é 78
$nota2 = $notas[1][2]; // $nota2 agora é 92
$nota3 = $notas[1][3]; // $nota3 agora é 80
#Iterando em um Array Multidimensional:
foreach ($notas as $aluno) {
    $nome = $aluno[0];
    $media = ($aluno[1] + $aluno[2] + $aluno[3]) / 3;
    echo "Nome: $nome, Média: $media<br>";
}
#Array Associativo Multidimensional:
// Um array associativo multidimensional representando informações de produtos
$produtos = array(
    "produto1" => array("nome" => "Camiseta", "preco" => 20),
    "produto2" => array("nome" => "Calça", "preco" => 30),
    "produto3" => array("nome" => "Boné", "preco" => 10)
);

$nomeProduto1 = $produtos["produto1"]["nome"]; // $nomeProduto1 agora é "Camiseta"
$precoProduto2 = $produtos["produto2"]["preco"]; // $precoProduto2 agora é 30
