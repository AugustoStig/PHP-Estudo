<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Use of var_dump em conjunto com "==" e "===";
// Uso do var_dump em conjunto com "==" e "===";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Variable creation;
// Criação de variável;

$FloatValue = 12.0;

// Variable creation;
// Criação de variável;

$IntValue = 12;

// Message print and line;
// Impressão de mensagem e quebra de linha;

echo '<strong>Valor e tipo da variável "FloatValue" :</strong>'."<br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($FloatValue);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Valor e tipo da variável "IntValue" :</strong>'."<br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($IntValue);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>Valor 1 é igual á $FloatValue.</strong><br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>Valor 2 é igual á $IntValue.</strong><br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>$FloatValue e $IntValue tem o mesmo valor?</strong><br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($FloatValue==$IntValue);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message break;
// Impressão de mensagem;

echo "<strong>$FloatValue e $IntValue tem o mesmo valor e tipo?</strong><br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($FloatValue===$IntValue);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Used to print messages and variable values;
// echo = Usado para impressão de mansagens ou valores;

// <strong> </strong> = Used to make the text bold, the end of the sentence must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Used to break line in the final exibition, must be used into quotation marks, single or doube;
// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas;

// \n = Used to break the line in the HTML code, generated after, must be used into quotation marks, double;
// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas;

// var_dump = Used to show the type and value of a variable, after calling it, open parenthesis and put the name of the variable inside;
// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro;

// == = Used to compare the value of two variables;
// == = Usado para comparar o valor de duas variáveis;

// === = Used to compare the value and type of two variables;
// === = Usado para comparar o valor e tipo de duas variáveis;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $IntValue = Receive a Int, 12;
// $IntValue = Recebe um Int, 12;

// $FloatValue = Receive a float, 12.0;
// $FloatValue = Recebe um Float, 12.0;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>