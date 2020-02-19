<?php

//Criado por José Augusto Chaves Izabel

//17/02/2020

//Código com a intenção de criar um array de frutas, e após isso imprimir duas delas.

//Criação do array "$Frutas". Após especificar que é um array, abrir parentesis e colocar os elementos do array.

$Frutas = array("Maçã", "Banana", "Jaca", "Melão", "Abacate", "Goiaba", "Limão", "Laranja", "Tangerina", "Manga", "Uva");

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão do primeiro número chamado no array "Frutas":</strong>'."<br>\n";

//Impressão do número 1 do array, o array quando não especificado começa em 0, ou seja, 1 é o segundo número do array.

echo $Frutas[1];

/*A tag "<br>\n" é utilizada para fazer a quebra de linha, o "<br>" faz a quebra ser exibida na execução do código, e o "\n" faz a quebra de 
linha no código HTML que será gerado.*/

echo "<br>\n";

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão do segundo número chamado no array "Frutas":</strong>'."<br>\n";

//Impressão do número 3 do array "$Frutas", ou seja, o quarto número.

echo $Frutas [3];

?>
