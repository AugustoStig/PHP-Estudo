<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 18/02/2020

// Use of "var_dump" with "||";
// Uso do "var_dump" em conjunto com "||";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Variable creation;
// Criação de variável;

$FirstCalculation = 2 * 3 > 5 || 7 + 2 == 9;

// Message print;
// Impressão de mensagem;

echo "<strong>(2*3) é igual maior que 5? Ou (7+2) é igual á 9?</strong><br>\n";

// Variable print;
// Impressão de variável;

var_dump($FirstCalculation);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Variable creation;
// Criação de variável;

$SecondCalculation = 2 * 3 > 5 || 7 + 2 == 10;

// Message print;
// Impressão de mensagem;

echo "<strong>(2*3) é maior que 5? Ou (7+2) é igual á 10?</strong><br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($SecondCalculation);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Use for print messages or variable values; 
// echo = Usado para impressão de mensagens ou valores;

// <strong> </strong> = Used to make the text bold, the end of the sentence must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// <br> = Use for break line in the final exibition of the code, must be used into quotation marks, single or double;
// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas;

// \n = Use for break line, in the HTML code generated after, must be used into quotation marks, double;
// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas;

// var_dump = Used to display the type and value of a variable, after calling it, open parenthesis and put the name of the variable inside;
// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro;

// || = Used as "or", when a true or false "boolean" should be returned;
// || = Usado como "ou", quando deve ser retornado um "boolean" verdadeiro ou falso;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $FirstCalculation = Receive a boolean, True or False;
// $FirstCalculation = Recebe um boolean, True ou False;

// $SecondCalculation = Receive a boolean, True or False;
// $SecondCalculation = Recebe um boolean, True ou False;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>