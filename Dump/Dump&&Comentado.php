<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado para testar o uso do "&&".

//Criação da variável "$Calculo", e utilizando o "&&", para causar o efeito de "e".

$Calculo = 2 * 3 > 5 && 7 + 2 == 9;

//Impressão da primeira pergunta.

echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 9?</strong><br>\n";

//"var_dump" da variável "$Calculo", para responder a primeira pergunta.

var_dump($Calculo);

//Quebra de linha.

echo "<br>\n";

//Impressão da segunda pergunta.

echo "<strong>(2*3) é maior que 5? E (7+2) é igual á 10?</strong><br>\n";

//Criação da variável "$Calculo2".

$Calculo2 = 2 * 3 > 5 && 7 + 2 == 10;

// "var_dump" da variável "$Calculo2", para responder a segunda pergunta.

var_dump($Calculo2);

?>