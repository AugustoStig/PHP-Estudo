<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 12/02/2020

// Uso do "var_dump" com "<=>", conhecido como starship.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação de variável.

$FirstValue = 10;

// Criação de variável.

$SecondValue = 20;

// Criação de variável.

$ThirdValue = 15;

// Criação de variável.

$FourthValue = 15;

// Criação de variável.

$FifthValue = 50;

// Criação de variável.

$SixthValue = 25;

// Impressão de variável.

echo "<strong>Valor 1 =</strong> $FirstValue.<br>\n";

// Impressão de variável e quebra de linha.

echo "<strong>Valor 2 =</strong> $SecondValue.<br>\n";

// Impressão de variável.

echo "<strong>Valor 3 =</strong> $ThirdValue.<br>\n";

// Impressão de variável.

echo "<strong>Valor 4 =</strong> $FourthValue.<br>\n";

// Impressão de variável.

echo "<strong>Valor 5 =</strong> $FifthValue.<br>\n";

// Impressão de variável.

echo "<strong>Valor 6 =</strong> $SixthValue.<br>\n";

// Impressão de mensagem.

echo "<strong>$FirstValue é maior que $SecondValue?</strong><br\n>";

// Impressão de "var_dump".

var_dump($FirstValue<=>$SecondValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>$ThirdValue é maior que $FourthValue?</strong><br>\n";

// Impressão de "var_dump".

var_dump($ThirdValue<=>$FourthValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>$FifthValue é maior que $SixthValue?</strong><br>\n";

// Impressão de "var_dump".

var_dump($FifthValue<=>$SixthValue);

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo "<strong>Legenda:</strong><br>\n";

// Impressão de mensagem.

echo "Caso o primeiro seja maior que o segundo, resulta em: <strong>-1.</strong><br>\n";

// Impressão de legenda.

echo "Caso os dois sejam iguais, resulta em: <strong>0.</strong><br>\n";

// Impressão de mensagem.

echo "Caso o segundo seja maior que o primeiro, resulta em:<strong> 1.</strong><br\n>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE COMANDOS :

// echo = Usado para impressão de mansagens ou valores.

// <strong> </strong>= Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

// <=> = Usado para comparar se uma variável é maior, menor ou igual a outra.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $FirstValue = Recebe um Int, 10.

// $SecondValue = Recebe um Int, 20.

// $ThirdValue = Recebe um Int, 15.

// $FourthValue = Recebe um Int, 15.

// $FifthValue = Recebe um Int, 50.

// $SixthValue = Recebe um Int, 25.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>