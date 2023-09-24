<?php 
/* A função die() é usada para interromper a execução de um script PHP 
e exibir uma mensagem personalizada na saída (normalmente na página da web ou no log do servidor).
Ela é frequentemente usada para lidar com erros ou para parar a execução de um script
em um ponto específico. */
$valor = 10;
if ($valor > 5) {
    echo "O valor é maior do que 5.";
} else {
    die("O valor não é maior do que 5."); // Interrompe o script e exibe a mensagem de erro.
}
/* A função sleep() é usada para pausar a execução de um script PHP
por um número especificado de segundos. Isso pode ser útil em situações 
em que você deseja adicionar um atraso entre as operações, como em scripts de tarefas agendadas,
ou quando deseja limitar a taxa de solicitações a um serviço externo. */
echo "Início do script<br>";
sleep(3); // Pausa a execução por 3 segundos
echo "Fim do script após a pausa.<br>";
