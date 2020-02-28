<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 17/02/2020

// Creation of two arrays, "Name" that saves people's names and "Color" that saves diferent color;
// Criação de dois arrays, "Name" que salvará nomes de pessoas e "Color" que salvará cores;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Creation of array "Color";
// Criação do array "Color";

$Color = array("Azul","Verde","Vermelho","Amarelo","Roxo","Preto","Cinza","Branco","Laranja","Bege","Lilás","Rosa");

// Array "Name" creation;
// Criação do array "Name";

$Name = array("Maria","Edna","José","Augusto","Almir","Ana","Luisa","Roberto","Ricardo","Luciana","Natália","João");

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do primeiro número chamado no array "Color" :</strong>'."<br>\n";

// Print of number 7 of "Color" array;
// Impressão do número 7 do array "Color";

echo $Color[7];

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do primeiro número chamado no array "Name" :</strong>'."<br>\n";

// Print of number 3 of "Name" array;
// Impressão do número 3 do array "Name";

echo $Name[3];

// Line break;
// Quebra de linha;

echo "<br>\n";

//Line break;
//Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do segundo número chamado no array "Color" :</strong>'."<br>\n";

// Print of number 3 of "Color" array;
// Impressão do número 3 do array "Color";

echo $Color[3];

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do segundo número chamado no array "Name" :</strong>'."<br>\n";

// Print of number 7 of "Name" array;
// Impressão do número 7 do array "Name";

echo $Name[7];

// End of code;
// Fim do código;

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// EXAMPLE :
// EXEMPLO :

// To create an array, create a variable first, for example:
// Para criar um array, deve ser criar a variável primeiro, exemplo:

// $Example = ;
// $Exemplo = ;

// Then you must inform that that variable will be an array, example:
// Após deve informar que aquela variável será um array, exemplo:

// $Example = array;
// $Exemplo = array;

// Then open parentheses and put the values ​​that will compose that variable, if it is a string, put it in quotation marks, example:
// Depois abrir parentesis e colocar os valores que irão compor aquela variável, caso seja string, colocar entre aspas, exemplo:

// $Example = array(1,2,3,4,5,"Augusto","Test");
// $Exemplo = array(1,2,3,4,5,"Augusto","Teste");

// Created array;
// Array criado;

/*To call some number in the array, write the variable in an "echo", after the variable put the number you want to call in square brackets,
remembered that the array starts at number 0 and not at number 1, example:*/
/* Para chamar algum número do array, escreva a a variável em um "echo", após a variável coloque o número que deseja chamar entre colchetes, 
lembrado que o array começa no número 0 e não no número 1, exemplo:*/

// echo $Example[3];
// echo $Exemplo[3];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Print a message;
// echo = Imprimir mensagem;

// <br> = Line Break in final exibition, must be used within quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break in the HTML code to be generated, must be used within quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// <strong> </strong> = Serves to make the text bold, after used it must be closed, it must be used inside quotes, single or double;
// <strong> </strong> = Serve para deixar o texto em negrito, após usado deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// exit = It serves to stop the code from being interpreted;
// exit = Serve para que o código pare de ser interpretado;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLES SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $Color = Array with diverse colors;
// $Color = Array com cores diversas; 

// $Name = Array with diverse people name;
// $Name = Array com nomes diversos;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>