<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar as três saídas possíveis usando o "var_dump" para comparar duas variaveís.

//Criação da variável "$Valor1", que recebeu 10 como valor.

$Valor1 = 10;

//Criação da variável "$Valor2", que revebeu 20 como valor.

$Valor2 = 20;

//Criação da variável "$Valor3", que recebeu 15 como valor.

$Valor3 = 15;

//Criação da variável "$Valor4", que recebeu 15 como valor.

$Valor4 = 15;

//Criação da variável "$Valor5", que recebeu 50 como valor.

$Valor5 = 50;

//Criação da variável "$Valor6", que recebeu 25 como valor.

$Valor6 = 25;

//Impressão do valor da variável "$Valor1", utilizando a tag "<strong>", que é utilizada para deixar o texto em negrito.

echo "<strong>Valor 1 =</strong> $Valor1.<br>\n";

/*Impressão do valor da variável "$Valor2", utilizando as tags "<br>\n", o "<br>" para que seja feita a quebra de linha na exibição final, 
e o "\n" para que seja feita a quebra de linha no código HTML que será gerado a seguir.*/

echo "<strong>Valor 2 =</strong> $Valor2.<br>\n";

//Impressão do valor da variável "$Valor3", utilizando a tag "<strong>", e as tags "<br>\n".

echo "<strong>Valor 3 =</strong> $Valor3.<br>\n";

//Impressão do valor da variável "$Valor4", utilizando a tag "<strong>", e as tags "<br>\n".

echo "<strong>Valor 4 =</strong> $Valor4.<br>\n";

//Impressão do valor da variável "$Valor5", utilizando a tag "<strong>", e as tags "<br>\n".

echo "<strong>Valor 5 =</strong> $Valor5.<br>\n";

//Impressão do valor da variável "$Valor6", utilizando a tag "<strong>", e as tags "<br>\n".

echo "<strong>Valor 6 =</strong> $Valor6.<br>\n";

//Pergunta usando as variáveis "$Valor1" e "$Valor2".

echo "<strong>$Valor1 é maior que $Valor2?</strong><br\n>";

//"var_dump", para que retorne um "boolean" sobre a pergunta feita acima.

var_dump($Valor1<=>$Valor2);

//Quebra de linha.

echo "<br>\n";

//Segunda pergunta, utilizando as variáveis "$Valor3" e "$Valor4".

echo "<strong>$Valor3 é maior que $Valor4?</strong><br>\n";

//"var_dump" que irá responder a pergunta acima.

var_dump($Valor3<=>$Valor4);

//Quebra de linha.

echo "<br>\n";

//Terceira pergunta, foi usado as variáveis "$Valor5" e "$Valor6".

echo "<strong>$Valor5 é maior que $Valor6?</strong><br>\n";

//Utilização do "var_dump" para responder a pergunta acima.

var_dump($Valor5<=>$Valor6);

//Quebra de linha.

echo "<br>\n";

//Impressão do que virá a seguir.

echo "<strong>Legenda:</strong><br>\n";

//Impressão da legenda em caso de resultar em "-1".

echo "Caso o primeiro seja maior que o segundo, resulta em: <strong>-1.</strong><br>\n";

//Impressão da legenda em caso de resultar em "0".

echo "Caso os dois sejam iguais, resulta em: <strong>0.</strong><br>\n";

//Impressão da legenda em caso de resultar em "1".

echo "Caso o segundo seja maior que o primeiro, resulta em:<strong> 1.</strong><br\n>";

?>