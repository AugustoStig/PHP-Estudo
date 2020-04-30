<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 18/02/2020

// Print a complete name with variables;
// Impressão de nome completo com uso de variáveis;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$FirstName = "José";

echo '<strong>Impressão da variável "FirstName" :</strong>'."<br>\n";
echo $FirstName;
echo "<br>";
echo "<br>\n";

$SecondName = "Augusto";

echo '<strong>Impressão da variável "SecondName" :</strong>'."<br>\n";
echo $SecondName;
echo "<br>\n";
echo "<br>\n";

$FirstSurname = "Chaves";

echo '<strong>Impressão da variável "FirstSurname" :</strong>'."<br>\n";
echo $FirstSurname;
echo "<br>\n";
echo "<br>\n";

$SecondSurname = "Izabel";

echo '<strong>Impressão da variável "SecondSurname" :</strong>'."<br>\n";
echo $SecondSurname;
echo "<br>\n";
echo "<br>\n";


$CompleteName = $FirstName." ".$SecondName;

echo '<strong>Impressão da variável "CompleteName" :</strong>'."<br>\n";
echo $CompleteName;
echo "<br>\n";
echo "<br>\n";

$CompleteSurname = $FirstSurname." ".$SecondSurname;

echo '<strong>Impressão da variável "CompleteSurname" :</strong>'."<br>\n";
echo $CompleteSurname;
echo "<br>\n";
echo "<br>\n";

$NameSurname = $CompleteName." ".$CompleteSurname;

echo "<strong>Impressão do nome completo do usuário :</strong><br>\n";
echo $NameSurname;

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMANDS SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Print message;
// echo = Imprimir mensagem;

// <br> = Line break, in final exibition, must be used into quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break, in the HTML code generated after, must be used into quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// exit = It serves to stop the code from being interpreted;
// exit = Serve para que o código pare de ser interpretado;

// <strong> </strong> = Leave the text written in bold, must be closed at the end of the text, must be used within quotation marks, single or double;
// <strong> </strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas;

// . = It is used to concatenate two variables, or one variable and one text, or two texts for example;
// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// SUBTITLE OF VARIABLES :
// LEGENDA DE VARIÁVEIS :

// $FirstName = Receive a string, "José";
// $FirstName = Recebe uma string, "José";

// $SecondName = Receive a string, "Augusto";
// $SecondName = Recebe uma string, "Augusto";

// $FirstSurname = Receive a string, "Chaves";
// $FirstSurname = Recebe uma string, "Chaves";

// $SecondSurname = Receive a string, "Izabel";
// $SecondSurname = Recebe uma string, "Izabel";

// $CompleteName = Receive the value of variables "$FirstName" and "$SecondName", using a space between them; 
// $CompleteName = Recebe o valor das variáveis "$FirstName" e "$SecondName", com uso de um espaço entre elas;

// $CompleteSurname = Receive the value of variables "$FirstName" and "$SecondName", using a space between them;
// $CompleteSurname = Recebe o valor das variáveis "$FirstSurname" e "SecondSurname", com uso de um espaço entre elas;

// $NameSurname = Receive the value of variables "$CompleteName" and "$SecondName", using a space between them;
// $NameSurname = Recebe o valor das variáveis "CompleteName" e "$CompleteSurname", com uso de um espaço entre elas;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
