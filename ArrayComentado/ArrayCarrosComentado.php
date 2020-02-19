<?php

//Criado por José Augusto Chaves Izabel

//17/02/2020

//Criação do array $Carros, onde será salvo 11 marcas de carro, númeradas do número 0 ao 10.

/*Criação do array "$Carros", após especificado que é um array, abrir parentesis e colocar os elementos do array, separados por uma vírgula, e 
caso forem strings, usar aspas.*/

$Carros = array("Fiat", "Ford", "Volkswagen", "BMW", "Mercedes-Benz", "Lada", "Dacia", "Renault", "Citroën", "Peugeot", "Holden");

//Impressão da mensagem do que vai acontecer a seguir.

echo "<strong>Impressão do primeiro número chamado:</strong><br>\n";

//Impressão do número 3 do array "$Carros", o quarto número, pois o array caso não especificado começa em 0.

echo $Carros[3];

/*Impressão da quebra de linha, utilizado a tag "<br>", que tem como função fazer a quebra de linha na exibição final, e a tag "/n", que tem como 
função fazer a quebra de linha no código HTML que será gerado.*/

echo "<br>\n";

//Impressão da mensagem do que irá acontecer a seguir, com o uso da tag "Strong", que serve para deixar as palavras em negrito.

echo "<strong>Impressão do segundo número chamado:</strong><br>\n";

//Impressão do número 7 do array "$Carros", o oitavo número.

echo $Carros[7];

?>