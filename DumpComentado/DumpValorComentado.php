<?php

//Criado por José Augusto Chaves Izabel

//18/02/2020

//Código criado com o objetivo de testar um "var_dump" em uma variável do tipo "float".

//Criação da variável "$Valor".

$Valor = 199.90;

//Impressão sobre o que irá acontecer a seguir.

echo '<strong>Impressão da variável "$Valor" :</strong>'."<br>\n";

//Impressão do valor da variável "$Valor".

echo $Valor;

//Quebra de linha utilizando a tag "<br>" para quebrar a linha na impressão final da mesma, e o "\n" para quebra a linha no código HTML que será gerado.

echo "<br>\n";

//Impressão sobre o que irá acontecer a seguir.

echo '<strong>Impressão do "var_dump" da variável "$Valor" :</strong>'."<br>\n";

//Impressão do "var_dump" utilizando a variável "$Valor".

var_dump($Valor);

?>