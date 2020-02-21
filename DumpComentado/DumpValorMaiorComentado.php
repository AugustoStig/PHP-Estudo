<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//18/02/2020

//Uso do "var_dump" com uso de um ">".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$FirstValue = 10;

//Criação de variável.

$SecondValue = 20;

//Impressão de mensagem.

echo "<strong>Valor 1 é igual á $FirstValue.</strong><br>\n";

//Impressão de mensagem.

echo "<strong>Valor 2 é igual á $SecondValue.</strong><br>\n";

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>$FirstValue é maior que $SecondValue?</strong><br>\n";

//Uso do "var_dump".

var_dump($FirstValue>$SecondValue);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>