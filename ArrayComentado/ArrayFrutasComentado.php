<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 17/02/2020

// Creation of "Fruit" array, will saves fruit names, after created, two numbers will be called;
// Criação do array "Fruit", que salvará nomes de frutas, após criado, dois números serão chamados;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Creation of "Fruit" array;
// Criação do array "Fruit";

$Fruit = array("Maçã","Banana","Jaca","Melão","Abacate","Goiaba","Limão","Laranja","Tangerina","Manga","Uva");

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do primeiro número chamado no array "Fruit":</strong>'."<br>\n";

// Print of number 1 of "Fruit" array;
// Impressão do número 1 do array "Fruit";

echo $Fruit[1];

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do segundo número chamado no array "Fruit":</strong>'."<br>\n";

// Print of number 3 of "Fruit" array;
// Impressão do número 3 do array "Fruit";

echo $Fruit[3];

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

// echo = Print message;
// echo = Imprimir mensagem;

// <br> = Line break on final exibition, mus be used into quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break in HTML code generated after, must be used into quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// <strong> </strong> = Used to leave the text blank, after using it, it must be used inside quotes, single or double;
// <strong> </strong> = Serve para deixar o texto em negrito, após usar deve fechar o mesmo, deve ser usado dentro de aspas, simples ou duplas;

// exit = Used to stop the code from being interpreted;s
// exit = Serve para que o código pare de ser interpretado;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLES SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $Fruit = Array with fruit names;
// $Fruit = Array com nomes de frutas;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>