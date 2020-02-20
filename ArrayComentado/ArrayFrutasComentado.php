<?php

//Criado e atualizado por José Augusto Chaves Izabel

//17/02/2020

//Criação de um array de frutas, após criado, dois números serão chamados.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação do array "$Frutas".

$Frutas = array("Maçã", "Banana", "Jaca", "Melão", "Abacate", "Goiaba", "Limão", "Laranja", "Tangerina", "Manga", "Uva");

//Impressão de mensagem.

echo '<strong>Impressão do primeiro número chamado no array "Frutas":</strong>'."<br>\n";

//Impressão do número 1 do array.

echo $Frutas[1];

//Quebra de linha.

echo "<br>\n";

//Impressão de mensagem.

echo '<strong>Impressão do segundo número chamado no array "Frutas":</strong>'."<br>\n";

//Impressão do número 3 do array "$Frutas".

echo $Frutas [3];

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

?>
