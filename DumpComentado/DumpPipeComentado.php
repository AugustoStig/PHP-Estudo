<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//18/02/2020

//Uso do "var_dump" em conjunto com "||".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$FirstCalculation = 2 * 3 > 5 || 7 + 2 == 9;

//Impressão de mensagem.

echo "<strong>(2*3) é igual maior que 5? Ou (7+2) é igual á 9?</strong><br>\n";

//Impressão de variável.

var_dump($FirstCalculation);

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$SecondCalculation = 2 * 3 > 5 || 7 + 2 == 10;

//Impressão de mensagem.

echo "<strong>(2*3) é maior que 5? Ou (7+2) é igual á 10?</strong><br>\n";

//Impressão de "var_dump". 

var_dump($SecondCalculation);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// || = Usado como "ou", quando deve ser retornado um "boolean" verdadeiro ou falso.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>