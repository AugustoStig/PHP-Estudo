<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar o uso do "!=", para testar se algo é diferente de um segundo projeto.

//Criação da variável "$Valor1", que receberá um "float".

$Valor1 = 12.0;

//Criação da variável "$Valor2", que receberá um "Int".

$Valor2 = 12;

//Mensagem sobre o que irá acontecer a seguir.

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

//"var_dump" que irá retornar o valor e tipo da variável "$Valor1"

var_dump($Valor1);

//Quebra de linha utilizando o "<br>" para quebrar a linha na exibição final e o "\n" para quebra a linha no código HTML.

echo "<br>\n";

//Mensagem sobre o que irá acontecer a seguir, com uso da tag "<strong>", para que o texto seja impresso em negrito.

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

//"var_dump" para informar o que foi pedido acima.

var_dump($Valor2);

//Quebra de linha.

echo "<br>\n";

//Mensagem informando o valor da variável "$Valor1".

echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";

//Mensagem informando o valor da variável "$Valor2".

echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";

//Primeira pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor?</strong><br>\n";

//"var_dump" para responder a primeira pergunta

var_dump($Valor1!=$Valor2);

//Quebra de linha

echo "<br>\n";

//Segunda pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor e tipo?</strong><br>\n";

//"var_dump" para responder a segunda pergunta.

var_dump($Valor1!==$Valor2);

?>