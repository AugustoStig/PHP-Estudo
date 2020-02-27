<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Uso do var_dump em conjunto com "==" e "===".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação de variável.

$FloatValue = 12.0;

// Criação de variável.

$IntValue = 12;

// Impressão de mensagem e quebra de linha.

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

// Impressão de "var_dump".

var_dump($FloatValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

// Impressão de "var_dump".

var_dump($IntValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>Valor 1 é igual á $FloatValue.</strong><br>\n";

// Impressão de mensagem.

echo "<strong>Valor 2 é igual á $IntValue.</strong><br>\n";

// Impressão de mensagem.

echo "<strong>$FloatValue e $IntValue tem o mesmo valor?</strong><br>\n";

// Impressão de "var_dump".

var_dump($FloatValue==$IntValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>$FloatValue e $IntValue tem o mesmo valor e tipo?</strong><br>\n";

// Impressão de "var_dump".

var_dump($FloatValue===$IntValue);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE COMANDOS :

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// == = Usado para comparar o valor de duas variáveis.

// === = Usado para comparar o valor e tipo de duas variáveis.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $IntValue = Recebe um Int, 12.

// $FloatValue = Recebe um Float, 12.0.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>