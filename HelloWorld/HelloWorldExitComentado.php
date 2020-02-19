<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de testar o "exit", fazendo uma impressão antes de seu uso e uma depois.

//Criação da variável "$Hello".

$Hello = "Hello";

//Criação da variável "$World".

$World = "World";

//Criação da variável "$Ponto".

$Ponto = "!!!";

//Criação da variável "$HelloWorld", que recebe o valor das variáveis "$Hello","$World","$Ponto".

$HelloWorld = $Hello." ".$World." ".$Ponto;

//Impressão da mensagem sobre o que irá acontecer a seguir, utilizando a tag "<strong>", para deixar o texto em negrito.

echo '<strong>Impressão da variável "$HelloWorld"</strong>'."<br>\n";

//Impressão da variável "$HelloWorld".

echo $HelloWorld;

//Quebra de linha utilizando o "<br>" para quebra a linha na exibição final, e o "\n", para que a linha seja quebrada no código HTML que será gerado.

echo "<br>\n";

//Quebra de linha.

echo "<br>\n";

//Mensagem sobre o que irá acontecer a seguir.

echo '<strong>Restante do código não impresso pelo uso do "exit".</strong>';

//Uso do "exit", para que o texto pare de ser executado.

exit;

//Impressão da mensagem que seria impressa caso o código continuasse sendo interpretado após o "exit".

echo "Teste Exit";

?>
