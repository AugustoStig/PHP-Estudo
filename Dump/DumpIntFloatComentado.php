<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar de o "var_dump" conseguiria diferenciar um "Int" e um "Float" na comparação.

//Criação da variável "$Valor1", que recebeu um "float".

$Valor1 = 23.23;

//Criação da variável "$Valor2", que recebeu um "Int".

$Valor2 = 23;

//Impressão do que irá acontecer a seguir.

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

//"var_dump" da variável "$Valor1".

var_dump($Valor1);

/*Quebra de linha, utilizando o "<br>" para que seja feita a quebra de linha na exibição final, 
e o "\n" para que seja feita a quebra de linha no código HTML que será gerado posteriormente.*/

echo "<br>\n";

//Impressão da mensagem sobre o que irá acontecer a seguir, utilizando a tag "<strong>", para que o texto seja exibido em negrito.

echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

//"var_dump" que retornará o tipo e valor da variável "$Valor2".

var_dump($Valor2);

//Quebra de linha.

echo "<br>\n";

//Impressão da menssagem do valor da variável "$Valor1".

echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";

//Impressão da mensagem do valor da variável "$Valor2".

echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";

//Impressão da primeira pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor?</strong><br>\n";

//Impressão do "var_dump" que responde a primeira pergunta.

var_dump($Valor1==$Valor2);

//Quebra de linha.

echo "<br>\n";

//Segunda pergunta.

echo "<strong>$Valor1 e $Valor2 tem o mesmo valor e tipo?</strong><br>\n";

//Impressão do retorno do "var_dump", que irá responder a segunda pergunta.

var_dump($Valor1===$Valor2);

?>