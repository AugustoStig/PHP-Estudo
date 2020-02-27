<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 17/02/2020

// Criação de dois arrays, um com nomes e outro com cores.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação do array "Color".

$Color = array("Azul","Verde","Vermelho","Amarelo","Roxo","Preto","Cinza","Branco","Laranja","Bege","Lilás","Rosa");

// Criação do array "Name".

$Name = array("Maria","Edna","José","Augusto","Almir","Ana","Luisa","Roberto","Ricardo","Luciana","Natália","João");

// Impressão de mensagem.

echo '<strong>Impressão do primeiro número chamado no array "Cores":</strong>'."<br>\n";

// Impressão do número 7 do array "Color".

echo $Color[7];

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo '<strong>Impressão do primeiro número chamado no array "Nomes":</strong>'."<br>\n";

// Impressão do número 3 do array "Name".

echo $Name[3];

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo '<strong>Impressão do segundo número chamado no array "Cores":</strong>'."<br>\n";

// Impressão do número 3 do array "Color".

echo $Color[3];

// Quebra de linha.

echo "<br>\n";

// Impressão de mensagem.

echo '<strong>Impressão do segundo número chamado no array "Nomes":</strong>'."<br>\n";

// Impressão do número 7 do array "Name".

echo $Name[7];

// Fim do código.

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXEMPLO :

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

// LEGENDA DE COMANDOS :

// echo = Imprimir mensagem.

// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas.

// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas.

// <strong> </strong> = Serve para deixar o texto em negrito, após usado deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// exit = Serve para que o código pare de ser interpretado.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $Color = Array com cores diversas. 

// $Name = Array com nomes diversos.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>