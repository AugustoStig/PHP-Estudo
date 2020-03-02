<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created e updated by José Augusto Chaves Izabel;
// Criado e atualizado por José Augusto Chaves Izabel;

// 12/02/2020

// Use of "var_dumo" with a "!=" and "!==";
// Uso do var_dump com o "!=" e "!==";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Variable creation;
// Criação de variável;

$FirstValue = 12.0;

// Variable creation;
// Criação de variável;

$SecondValue = 12;

// Message print;
// Impressão de mensagem;

echo '<strong>Valor e tipo da variável "FirstValue" :</strong>'."<br>\n";

// "var_dumo" print;
// Impressão de "var_dump";

var_dump($FirstValue);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Valor e tipo da variável "SecondValue" :</strong>'."<br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($SecondValue);

// Line break;
// Quebra de linha

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>Valor 1 é igual á $FirstValue.</strong><br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>Valor 2 é igual á $SecondValue.</strong><br>\n";

// Quebra de linha;
// Line break;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo "<strong>$FirstValue e $SecondValue tem o mesmo valor?</strong><br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($FirstValue!=$SecondValue);

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message and variable print;
// Impressão de mensagem e variável;

echo "<strong>$FirstValue e $SecondValue tem o mesmo valor e tipo?</strong><br>\n";

// "Var_dump" print;
// Impressão de "var_dump";

var_dump($FirstValue!==$SecondValue);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Used to print messages or variable values;
// echo = Usado para impressão de mensagens ou valores;

// <strong> </strong> = Used to make the text bold, the end of the sentence must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// <br> = Used to break line in final exibition, must be used into quotation marks, single or double; 
// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas;

// \n = Used to break line in the HTML code, generated after, must be used into quotation marks, double;
// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas;

// var_dump = Used to display the type and value of a variable, after calling it, open parenthesis and put the name of the variable inside;
// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro;

// != = Used to compare the value of two variables and see if they are different;
// != = Usado para comparar o valor de duas variáveis e constatar se são diferentes;

// !== = Used to compare the value and type of two variables and see if they are different;
// !== = Usado para comparar o valor e tipo de duas variáveis e constatar se são diferentes;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $FirstValue = Receive a Float, 12.0;
// $FirstValue = Recebe um Float, 12.0;

// $FirstValue = Receive a Int, 12;
// $SecondValue = Recebe um Int, 12;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>