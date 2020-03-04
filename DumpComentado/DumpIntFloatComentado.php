<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Use of "var_dump" with a "==" and "===";
// Uso do "var_dump" em conjunto com o "==" e "===";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Variable creation;
// Criação de variável;

$FloatValue = 23.23;

// Variable creation;
// Criação de variável;

$IntValue = 23;

// Message print;
// Impressão de mensagem;

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

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

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($IntValue);

// Break line;
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

// Break line;
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

// Message print;
// Impressão de mensagem;

echo "<strong>$FloatValue e $IntValue tem o mesmo valor e tipo?</strong><br>\n";

// "var_dump" print;
// Impressão de "var_dump";

var_dump($FloatValue===$IntValue);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Used to print a message or variable values;
// echo = Usado para impressão de mensagens ou valores;

// <strong> </strong> = Used to make the text bold, the end of the sentence must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// <br> = Used to break line in final exibition of the code, must be used into quotation marks, single or double;
// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas;

// \n = Used to break line in the HTML code, generated after, must be used into quotation marks, double;
// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas;

// var_dump = Used to display the type and value of a variable, after calling it, open parenthesis and put the name of the variable inside;
// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro;

// == = Used to compare whether two variables have the same value;
// == = Usado para comparar se duas variáveis tem o mesmo valor;

// === = Used to compare whether two variables have the same value and type;
// === = Usado para comparar se duas variáveis tem o mesmo valor e tipo;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $IntValue = Receive a Int, 23;
// $IntValue = Recebe um Int, 23;

// $FloatValue = Receive a Float, 23.23;
// $FloatValue = Recebe um Float, 23.23; 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>