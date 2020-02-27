<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Utilização do "var_dump", junto com o "&&".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação de variável.

$FirstCalculation = 2 * 3 > 5 && 7 + 2 == 9;

// Impressão de mensagem.

echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 9?</strong><br>\n";

// Impressão de "var_dump".

var_dump($FirstCalculation);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 10?</strong><br>\n";

// Criação de variável.

$SecondCalculation = 2 * 3 > 5 && 7 + 2 == 10;

// Impressão de "var_dump".

var_dump($SecondCalculation);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDAS DE COMANDOS :

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// && = Usado para a função de "e", quando necessita de que duas ou mais booleanos sejam verdadeiros.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $FirstCalculation = Recebe um boolean, true ou false.

// $SecondCalculation = Recebe um boolean, true ou false.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>