<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 18/02/2020

// Print a "Hello World!!!" with variables;
// Impressão de um "Hello World!!!" com uso de variáveis;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Creation of variable;
// Criação de variável;

$Hello = "Hello";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão da variável "Hello" :</strong>'."<br>\n";

// Variable print and a line breake;
// Impressão de variável e quebra de linha;

echo $Hello."<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Variable creation;
// Criação de variável;

$World = "World";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão da variável "World" :</strong>'."<br>\n";

// Variable print;
// Impressão de variável;

echo $World."<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Variable creation;
// Criação da variável;

$Point = "!!!";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão da variável "Point" :</strong>'."<br>\n";

// Variable print;
// Impressão de variável;

echo $Point."<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Variable creation;
// Criação da variável;

$HelloWorld = $Hello." ".$World.$Point;

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão da variável "HelloWorld" :</strong>'."<br>\n";

// Variable print;
// Impressão de variável;

echo $HelloWorld;

// End of code;
// Fim do código;

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMAND SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Print message;
// echo = Imprimir mensagem;

// <br> = Line break, in final exibition, must be used inside of quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break, in the HTML code generated after, must be used into quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// exit = Used to stop the code from being interpreted;
// exit = Serve para que o código pare de ser interpretado;

// <strong> </strong> = Leave the text written in bold, must be closed at the end of the text, must be used within quotation marks, single or double;
// <strong> </strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas;

// . = It is used to concatenate two variables, or one variable and one text, or two texts for example;
// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $Hello = Receive a string, "Hello";
// $Hello = Recebe uma string, "Hello";

// $World = Receive a string, "World;"
// $World = Recebe uma string, "World";

// $Point = Receive a string, "!!!";
// $Point = Recebe uma string, "!!!";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>