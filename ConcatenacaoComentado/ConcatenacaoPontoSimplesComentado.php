<?php

//Criado por José Augusto Chaves Izabel

//17/02/2020

/*Código com a intenção de imprimir o "Hello World!!!" de duas maneiras diferentes, uma palavra por variável, separadas por um "<br>\n", 
e depois juntas em uma única variável que terá a função de imprimir Hello World!!!*/

//Criação da variável "$Hello", que terá a função de armazenar a string "Hello".

$Hello = "Hello";

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão da variável "$Hello" :</strong>'."<br>\n";

//Impressão da variável "$Hello".

/*Uso da tag "<br>" que é utilizada para quebra linha na exibição final, e da tag "\n", que é utilizada para quebra linha no código HTML que será 
gerado como resultado.*/

echo $Hello."<br>\n";

//Criação da variável "$World", que terá a função de armazenar a string "World".

$World = "World";

//Impressão da mesnagem do que irá acontecer a seguir.

echo '<strong>Impressão da variável "$World" :</strong>'."<br>\n";

/*Impressão da variável "$World", junto com a tag "<br>" para fazer a quebra de linha na exibição final e a tag "\n" para fazer a quebra de linha 
no código HTML, unido por um ponto, que serve para fazer a concatenção.*/

echo $World."<br>\n";

//Impressão da mensagem do que irá acontecer a seguir, utilizando a tag "<strong>", para que a mensagem exibida esteja em negrito.

echo '<strong>Impressão da variável "$Ponto" :</strong>'."<br>\n";

//Criação da variável "$Ponto", que terá a função de armazenar "!!!".

$Ponto = "!!!";

//Impressão da variável "$Ponto", utilizado o "<br>\n" para fazer a quebra de linha.

echo $Ponto."<br>\n";

//Impressão da mensagem do que irá acontecer a seguir em negrito.

echo '<strong>Impressão da junção das variáveis "$Hello","$World","$Ponto" :</strong>'."<br>\n";

//Impressão das variáveis "$Hello", "$World" e "$Ponto", utilizando aspas com espaço para fazer a separação e o ponto para a concatenação.

echo $Hello." ".$World." ".$Ponto;

?>
