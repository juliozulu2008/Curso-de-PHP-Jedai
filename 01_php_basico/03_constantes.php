<?php 

#Modo de declarar Constantes
#define("NOME_DA_CONSTANTE", valor_da_constante);
#const NOME_DA_CONSTANTE = valor_da_constante; a partir do php 5.3.0
define("PI", 3.14159265359);
const TAXA_DE_JUROS = 0.05;
define("NOME", "João");
echo PI;  // Saída: 3.14159265359
echo TAXA_DE_JUROS;  // Saída: 0.05
echo NOME;  // Saída: João
