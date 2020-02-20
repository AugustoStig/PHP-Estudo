<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//17/02/2020

//Criação do array "Carros", onde serão salvas 11 marcas de carro, númeradas de 0 a 10.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação do array "Carros".

$Carros = array("Fiat", "Ford", "Volkswagen", "BMW", "Mercedes-Benz", "Lada", "Dacia", "Renault", "Citroën", "Peugeot", "Holden");

//Impressão de mensagem.

echo "<strong>Impressão do primeiro número chamado:</strong><br>\n";

//Impressão do número 3 do array.

echo $Carros[3];

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo "<strong>Impressão do segundo número chamado:</strong><br>\n";

//Impressão do número 7 do array "$Carros".

echo $Carros[7];

//Fim do código.

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Para criar um array, deve ser criar a variável primeiro, exemplo:

// $Exemplo = ;

// Após deve informar que aquela variável será um array, exemplo:

// $Exemplo = array;

// Depois abrir parentesis e colocar os valores que irão compor aquela variável, caso seja string, colocar entre aspas, exemplo:

// $Exemplo = array(1, 2, 3, 4, 5, "augusto", "teste");

// Array criado.

/* Para chamar algum número do array, escreva a a variável em um echo, após a variável coloque o número que deseja chamar entre colchetes, 
lembrado que o array começa no 0 e não no 1, exemplo:*/

// echo $Exemplo[3];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Imprimir mensagem.

// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas.

// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas.

// exit = Serve para que o código pare de ser interpretado.

?>