<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//12/02/2020

//Uso do "var_dump" com "<=>", conhecido como starship.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$Valor1 = 10;

//Criação de variável.

$Valor2 = 20;

//Criação de variável.

$Valor3 = 15;

//Criação de variável.

$Valor4 = 15;

//Criação de variável.

$Valor5 = 50;

//Criação de variável.

$Valor6 = 25;

//Impressão de variável.

echo "<strong>Valor 1 =</strong> $Valor1.<br>\n";

//Impressão de variável e quebra de linha.

echo "<strong>Valor 2 =</strong> $Valor2.<br>\n";

//Impressão de variável.

echo "<strong>Valor 3 =</strong> $Valor3.<br>\n";

//Impressão de variável.

echo "<strong>Valor 4 =</strong> $Valor4.<br>\n";

//Impressão de variável.

echo "<strong>Valor 5 =</strong> $Valor5.<br>\n";

//Impressão de variável.

echo "<strong>Valor 6 =</strong> $Valor6.<br>\n";

//Impressão de mensagem.

echo "<strong>$Valor1 é maior que $Valor2?</strong><br\n>";

//Impressão de "var_dump".

var_dump($Valor1<=>$Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>$Valor3 é maior que $Valor4?</strong><br>\n";

//Impressão de "var_dump".

var_dump($Valor3<=>$Valor4);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>$Valor5 é maior que $Valor6?</strong><br>\n";

//Impressão de "var_dump".

var_dump($Valor5<=>$Valor6);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>Legenda:</strong><br>\n";

//Impressão de mensagem.

echo "Caso o primeiro seja maior que o segundo, resulta em: <strong>-1.</strong><br>\n";

//Impressão de legenda.

echo "Caso os dois sejam iguais, resulta em: <strong>0.</strong><br>\n";

//Impressão de mensagem.

echo "Caso o segundo seja maior que o primeiro, resulta em:<strong> 1.</strong><br\n>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// <=> = Usado para comparar se uma variável é maior, menor ou igual a outra.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>