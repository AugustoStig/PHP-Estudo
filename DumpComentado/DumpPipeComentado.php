<?php

//Criado por José Augusto Chaves Izabel

//18/02/2020

//Código criado para testar o uso do "||".

//Criação da variável "$Calculo", que terá como valor um booleano usando "||" como "ou".

$Calculo = 2 * 3 > 5 || 7 + 2 == 9;

//Impressão da pergunta que será respondida a seguir.

echo "<strong>(2*3) é igual maior que 5? Ou (7+2) é igual á 9?</strong><br>\n";

//Impressão da resposta da pergunta, utilizando o "var_dump", para que resulte o tipo e valor da variável.

var_dump($Calculo);

/*Quebra de linha, utilizando o "<br>", que servirá para causar a qubra de linha na exibição final, e o "\n" para causar a quebra de linha 
no código HTML que será gerado.*/

echo "<br>\n";

//Criação da variável "$Calculo2", que terá como valor um dois calculos e dois "||", que terão função de "ou".

$Calculo2 = 2 * 3 > 5 || 7 + 2 == 10;

//Impressão da pergunta que será respondida a seguir, utilizando a tag "<strong>", para que otexto seja exibido em negrito.

echo "<strong>(2*3) é maior que 5? Ou (7+2) é igual á 10?</strong><br>\n";

//Impressão de um "var_dump", que imprimirá o tipo e valor da variável. 

var_dump($Calculo2);

?>