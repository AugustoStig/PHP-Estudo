<?php

//Criado por José Augusto Chaves Izabel

//18/02/2020

//Código criado com a intenção de testar a resposta do "var_dump" "True" ou "False".

//Criação da variável "$Valor1", que será igual a "10".

$Valor1 = 10;

//Criaão da variável "$Valor2", que será igual a "20".

$Valor2 = 20;

//Mensagem informando sobre o valor da variável "$Valor1".

echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";

//Mensagem informando sobre o valor da variável "$Valor2".

echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";

//Quebra de linha, utilizando a tag "<br>" para fazer a quebra visual e a tag "\n" para fazer a quebra no HTML que será gerado a seguir.

echo "<br>\n";

//Impressão da pergunta que será respondida a seguir.

echo "<strong>$Valor1 é maior que $Valor2?</strong><br>\n";

//Uso do "var_dump", para que ele imprima o tipo e valor da variável, que resultará em "booleano" com valor de "true" ou "false"

var_dump($Valor1>$Valor2);

?>