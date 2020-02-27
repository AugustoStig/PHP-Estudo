<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 17/02/2020

// Impressão de um "Hello World !!!" com uso das variáveis.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação de variável.

$Hello = "Hello";

// Impressão de mensagem.

echo '<strong>Impressão da variável "$Hello" :</strong>'."<br>\n";

// Impressão de variável e quebra de linha.

echo $Hello."<br>\n";

// Criação de variável.

$World = "World";

// Impressão de mensagem.

echo '<strong>Impressão da variável "$World" :</strong>'."<br>\n";

// Impressão de variável e quebra de linha.

echo $World."<br>\n";

// Impressão de mensagem.

echo '<strong>Impressão da variável "$Point" :</strong>'."<br>\n";

// Criação de variável.

$Point = "!!!";

// Impressão de variável.

echo $Point."<br>\n";

// Impressão de mensagem.

echo '<strong>Impressão da junção das variáveis "$Hello","$World","$Point" :</strong>'."<br>\n";

// Impressão de variáveis.

echo $Hello." ".$World." ".$Point;

// Fim do código.

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE COMANDOS :

// echo = Imprimir mensagem.

// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas.

// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas.

// exit = Serve para que o código pare de ser interpretado.

// <strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas.

// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $Hello = Recebe uma string, "Hello".

// $World = Recebe uma string, "World".

// $Point = Recebe uma string, "!!!"

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
