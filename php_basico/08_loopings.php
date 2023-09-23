<?php 

#LOOPINGS

#FOR
#O for loop é usado quando você sabe quantas vezes deseja que o código seja executado.
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i<br>";
}
#WHILE
/* O while loop é usado quando você quer que o código seja executado 
enquanto uma condição for verdadeira. */
$contador = 0;
while ($contador < 3) {
    echo "Contador: $contador<br>";
    $contador++;
}
#DO ... WHILE
/* O do...while loop é semelhante ao while, mas garante que o código seja 
executado pelo menos uma vez, mesmo se a condição for falsa no início. */
$contador = 0;
do {
    echo "Contador: $contador<br>";
    $contador++;
} while ($contador < 3);
#FOREACH
/* O foreach loop é usado especificamente para iterar sobre elementos em um array ou iterável. */
$frutas = ["Maçã", "Banana", "Laranja"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta<br>";
}
# BREAK e CONTINUE
/* Dentro de loops, você pode usar a instrução break para sair imediatamente do loop e a instrução
continue para pular a iteração atual e continuar com a próxima. */
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        continue; // Pula a iteração quando $i for igual a 3
    }
    echo "Número: $i<br>";
    if ($i == 4) {
        break; // Sai do loop quando $i for igual a 4
    }
}
####### CUIDADO COM O LOOP INFINITO #######
// Exemplo de loop infinito
while (true) {
    echo "O palmeiras nao tem Mundial!";
    // Este loop continuará para sempre, a menos que seja interrompido manualmente
}

