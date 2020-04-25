<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Utilization of "var_dump", with a "&&";
// Utilização do "var_dump", junto com o "&&";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$FirstCalculation = 2 * 3 > 5 && 7 + 2 == 9;

echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 9?</strong><br>\n";

var_dump($FirstCalculation);

echo "<br>\n";
echo "<br>\n";
echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 10?</strong><br>\n";

$SecondCalculation = 2 * 3 > 5 && 7 + 2 == 10;

var_dump($SecondCalculation);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Used to print messages e variable values;
// echo = Usado para impressão de mensagens ou valores de variáveis;

// <strong> </strong> = Used to make the text bold, the end of the sentence must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// <br> = Used to break the line in the final code display, used inside quotes, single or double;
// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas;

// \n = Used to break the line in the HTML code, generated after, must be used into quotation marks, double;
// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas;

// var_dump = Used to display the type and value of a variable, after calling it, open parenthesis and put the name of the variable inside;
// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro;

// && = Used to a function of "and", when you need two or more Booleans to be true;
// && = Usado para a função de "e", quando necessita de que duas ou mais booleanos sejam verdadeiros;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLES SUBTITLE :
// LEGENDA DE VARIÁVEIS : 

// $FirstCalculation = Receive a boolean, true or false
// $FirstCalculation = Recebe um boolean, true ou false;

// $SecondCalculation = Receive a boolean, true or false;
// $SecondCalculation = Recebe um boolean, true ou false;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
