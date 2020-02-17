<?php

//Criado por José Augusto Chaves Izabel.

//11/02/2020

/*Código com a finalidade de imprimir "Hello World!!!", mas com cada parte separada em uma variável, e ao final serão unidas por uma terceira variável, 
que terá a função de imprimir "Hello World!!!".*/

//Criação da variável "$Hello", que terá a função de armazenar a palavra "$Hello".

$Hello = "Hello";

//Impressão da mensagem sobre o que acontecerá a seguir.

echo '<strong>Impressão da variável $Hello :</strong>'."<br>\n";

/*Impressão da variável "$Hello", com as tags de quebra de linha "<br>\n", o "<br>" tem como função exibir uma quebra linha na exibição final, 
e o "\n", para fazer a quebra de linha no código HTML que será gerado.*/

echo $Hello."<br>\n";

//Criação da variável "$World".

$World = "World";

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão da variável $World :</strong>'."<br>\n";

//Impressão da variável "$World", com ao final uma quebra de linha.

echo $World."<br>\n";

//Criação da variável "Ponto", que irá armazenar "!!!".

$Ponto = "!!!";

//Impressão da mensagem do que acontecerá a seguir, com uso da tag "<strong>", para que o texto seja exibido em negrito.

echo '<strong>Impressão da variável $Ponto :</strong>'."<br>\n";

//Impressão da variável "$Ponto", com uma quebra de linha e usando o ponto para concatenação.

echo $Ponto."<br>\n";

//Criação da variável "$HelloWorld", que armazenará as variáveis "$Hello", "$World" e "$Ponto".

$HelloWorld = $Hello." ".$World.$Ponto;

//Impressão da mensagem sobre o que acontecerá a seguir.

echo '<strong>Impressão da variável $HelloWorld :</strong>'."<br>\n";

//Impressão da variável "$HelloWorld".

echo $HelloWorld;
?>
