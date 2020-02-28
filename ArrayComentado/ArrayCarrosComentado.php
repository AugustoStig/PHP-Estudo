<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel;
// Criado e atualizado por José Augusto Chaves Izabel;

// 17/02/2020;

// Creation of "Car" array, where will be saved 11 car brands, numbered of 0 to 10;
// Criação do array "Car", onde serão salvas 11 marcas de carro, númeradas de 0 a 10;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Creation of "Car" array;
// Criação do array "Car";

$Car = array("Fiat","Ford","Volkswagen","BMW","Mercedes-Benz","Lada","Dacia","Renault","Citroën","Peugeot","Holden");

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do primeiro número chamado do array "Car" :</strong>'."<br>\n";

// Print of number 3 of "Car" array;
// Impressão do número 3 do array "Car";

echo $Car[3];

// Line break;
// Quebra de linha;

echo "<br>\n";

// Line break;
// Quebra de linha;

echo "<br>\n";

// Message print;
// Impressão de mensagem;

echo '<strong>Impressão do segundo número chamado do array "Car" :</strong>'."<br>\n";

// Print of number 7 of "Car" array;
// Impressão do número 7 do array "Car";

echo $Car[7];

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

// SUBTITLE OF COMMANDS :
// LEGENDA DE COMANDOS :

// echo = Print messages;
// echo = Imprimir mensagem;

// <br> = Line break in final exibition, must be used into quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break in the HTML code generated after, must be used into quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// <strong> </strong> = Used to make the text bold, after its use it must be closed, it must be used within quotation marks, single or double;
// <strong> </strong> = Serve para deixar o texto em negrito, após seu uso deve ser fechado, deve ser usado dentro de aspas, simples ou duplas;

// exit = It serves to stop the code from being interpreted;
// exit = Serve para que o código pare de ser interpretado;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// SUBTITLE OF VARIABLES :
// LEGENDA DE VARIÁVEIS : 

// $Car = Array with car brands;
// $Car = Array com marcas de carros;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>