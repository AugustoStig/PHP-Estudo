<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar se o "var_dump" conseguiria diferenciar um "Int" e um "Float" que valem a mesma coisa.

//Criação da variável "$Valor1", que recebeu um "Float".

$Valor1 = 12.0;

//Criação da variável "$Valor2", que recebeu um "Int".

$Valor2 = 12;

/*Impressão da mensagem sobre o que irá acontecer a seguir, com uso da tag "<br>\n", o "<br>" é utilizado para criar a quebra de linha na exibição final, 
e o "\n" é utilizado para quebra a linha no código HTML que será gerado.*/

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

//Impressão do "var_dump", que irá imprimir o tipo e valor da variável "$Valor1".

var_dump($Valor1);

//Quebra de linha.

echo "<br>\n";

//Mensagem sobre o que irá acontecer a seguir.

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

//"var_dump" da variável "$Valor2".

var_dump($Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão sobre o valor da variável "$Valor1", utilizando a tag "<strong>", que servirá para deixar todo o texto em negrito.

echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";

//Impressão sobre o valor da variável "$Valor2".

echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";

//Impressão da primeira pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor?</strong><br>\n";

//"var_dump" da resposta da primeira pergunta.

var_dump($Valor1==$Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão da segunda pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor e tipo?</strong><br>\n";

//Impressão do "var_dump" que responde a segunda pergunta.

var_dump($Valor1===$Valor2);

?>