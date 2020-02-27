<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criado e atualizado por José Augusto Chaves Izabel

// 18/02/2020

// Impressão de nome completo com uso de variáveis.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Criação de variável.

$FirstName = "José";

// Impressão de mensagem.

echo '<strong>Impressão da variável $Nome :</strong>'."<br>\n";

// Impressão de variável.

echo $FirstName;

// Quebra de linha.

echo "<br>\n";

// Criação de variável;

$SecondName = "Augusto";

// Impressão de mensagem.

echo '<strong>Impressão da variável $Nome2 :</strong>'."<br>\n";

// Impressão de variável.

echo $SecondName;

// Quebra de linha.

echo "<br>\n";

// Criação de variável.

$FirstSurname = "Chaves";

// Impressão de mensagem.

echo '<strong>Impressão da variável $Sobrenome :</strong>'."<br>\n";

// Impressão de variável.

echo $FirstSurname;

// Quebra de linha.

echo "<br>\n";

// Criação de variável.

$SecondSurname = "Izabel";

// Impressão de mensagem.

echo '<strong>Impressão da variável $Sobrenome2 :</strong>'."<br>\n";

// Impressão de variável.

echo $SecondSurname;

// Quebra de linha.

echo "<br>\n";

// Criação de variável.

$CompleteName = $FirstName." ".$SecondName;

// Impressão de mensagem.

echo '<strong>Impressão da variável $NomeCompleto :</strong>'."<br>\n";

// Impressão de variável.

echo $CompleteName;

// Quebra de linha.

echo "<br>\n";

// Criação de variável.

$CompleteSurname = $FirstSurname." ".$SecondSurname;

// Impressão de mensagem.

echo '<strong>Impressão da variável $SobrenomeCompleto :</strong>'."<br>\n";

// Impressão de variável.

echo $CompleteSurname;

// Quebra de linha.

echo "<br>\n";

// Criação de variável.

$NameSurname = $CompleteName." ".$CompleteSurname;

// Impressão de variável.

echo "<strong>Impressão do nome completo do usuário :</strong><br>\n";

// Impressão de variável.

echo $NameSurname;

// Fim do código.

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE COMANDOS :

// echo = Imprimir mensagem.

// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas.

// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas.

// exit = Serve para que o código pare de ser interpretado.

// <strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas.

// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// LEGENDA DE VARIÁVEIS :

// $FirstName = Recebe uam string, "José".

// $SecondName = Recebe uma string, "Augusto".

// $FirstSurname = Recebe uma string, "Chaves".

// $SecondSurname = Recebe uma string, "Izabel".

// $CompleteName = Recebe o valor das variáveis "$FirstName" e "$SecondName", com uso de um espaço entre elas.

// $CompleteSurname = Recebe o valor das variáveis "$FirstSurname" e "SecondSurname", com uso de um espaço entre elas.

// $NameSurname = Recebe o valor das variáveis "CompleteName" e "$CompleteSurname", com uso de um espaço entre elas.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>