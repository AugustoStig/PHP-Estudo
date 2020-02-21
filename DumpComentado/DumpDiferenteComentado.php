<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//12/02/2020

//Uso do var_dump com o "!=" e "!==".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$Valor1 = 12.0;

//Criação de variável.

$Valor2 = 12;

//Impressão de mensagem.

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

//Impressão de "var_dump""

var_dump($Valor1);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

//Impressão de "var_dump".

var_dump($Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";

//Impressão de mensagem.

echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";

//Impressão de mensagem.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor?</strong><br>\n";

//Impressão de "var_dump".

var_dump($Valor1!=$Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem e variável.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor e tipo?</strong><br>\n";

//Impressão de "var_dump".

var_dump($Valor1!==$Valor2);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// != = Usado para comparar o valor de duas variáveis e constatar se são diferentes.

// !== = Usado para comparar o valor e tipo de duas variáveis e constatar se são diferentes.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>