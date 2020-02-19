<?php

//Criado por José Auusto Chaves Izabel

//11/02/2020

//Código com a intenção de imprimir "Hello World!!!", e após isso, utilizando o "var_dump" mostrar seu tipo e tamanho.

//Mensagem sobre o que irá acontecer a seguir.

echo '<strong>Impressão da variável "$Hello" :</strong>'."<br>\n";

//Criação da variável "$Hello".

$Hello = "Hello World!!!";

//Impressão da variável "$Hello", utilizando também a tag "<br>" para quebrar a linha na exibição final e da "\n" para quebrar a linha no código HTML.

echo $Hello."<br>\n";

//Mensagem sobre o que irá acontecer a seguir.

echo "<strong>Especificação da variável 'Hello' utilizado var_dump:</strong><br>\n";

//Utilização do "var_dump", o qual serve para imprimir o tipo e tamanho de uma variável.

var_dump ($Hello);

?>
