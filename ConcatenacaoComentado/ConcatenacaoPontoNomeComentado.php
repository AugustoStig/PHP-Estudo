<?php

//Criado e atualizado por José Augusto Chaves Izabel

//18/02/2020

//Impressão de nome com uso de variáveis.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$Nome = "José";

//Impressão de mensagem.

echo '<strong>Impressão da variável $Nome :</strong>'."<br>\n";

//Impressão de variável.

echo $Nome;

//Quebra de linha.

echo "<br>\n";

//Criação de variável;

$Nome2 = "Augusto";

//Impressão de mensagem.

echo '<strong>Impressão da variável $Nome2 :</strong>'."<br>\n";

//Impressão de variável.

echo $Nome2;

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$Sobrenome = "Chaves";

//Impressão de mensagem.

echo '<strong>Impressão da variável $Sobrenome :</strong>'."<br>\n";

//Impressão de variável.

echo $Sobrenome;

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$Sobrenome2 = "Izabel";

//Impressão de mensagem.

echo '<strong>Impressão da variável $Sobrenome2 :</strong>'."<br>\n";

//Impressão de variável.

echo $Sobrenome2;

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$NomeCompleto = $Nome." ".$Nome2;

//Impressão de mensagem.

echo '<strong>Impressão da variável $NomeCompleto :</strong>'."<br>\n";

//Impressão de variável.

echo $NomeCompleto;

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$SobrenomeCompleto = $Sobrenome." ".$Sobrenome2;

//Impressão de mensagem.

echo '<strong>Impressão da variável $SobrenomeCompleto :</strong>'."<br>\n";

//Impressão de variável.

echo $SobrenomeCompleto;

//Quebra de linha.

echo "<br>\n";

//Criação de variável.

$NomesCompletos = $NomeCompleto." ".$SobrenomeCompleto;

//Impressão de variável.

echo "<strong>Impressão do nome completo do usuário :</strong><br>\n";

//Impressão de variável.

echo $NomesCompletos;

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Imprimir mensagem.

// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas.

// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas.

// exit = Serve para que o código pare de ser interpretado.

// <strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas.

// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo.

?>