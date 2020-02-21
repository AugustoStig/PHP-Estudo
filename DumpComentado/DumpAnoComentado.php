<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//11/02/2020

//Código criado com o objetivo de testar o var_dump em uma variável do tipo inteiro.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação da variável "$AnoNascimento".

$BirthYear = 1947;

//Impressão de mensagem.

echo '<strong>Impressão da variável "$Anonascimento" :</strong>'."<br>\n";

//Impressão de variável.

echo $BirthYear;

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo '<strong>Impressão da variável "$AnoNascimento" :</strong>'."<br>\n";

//Impressão de "var_dump".

var_dump($BirthYear);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>