<?php

//Criado por José Augusto Chaves Izabel

//11/02/2020

//Código criado com a intenção de treinar a concatenação utilizando o ".".

//Criação da variável "$Nome".

$Nome = "José";

//Impressão da mensagem do que irá acontecer a seguir, com uso da tag "<strong>" para deixar o texto em negrito, e das tags de quebra de linha "<br>\n".

echo '<strong>Impressão da variável $Nome :</strong>'."<br>\n";

//Impressão da variável "$Nome".

echo $Nome;

//Quebra de linha utilizando o "<br>" para quebrar a linha na exibição final, e o "\n" para quebrar a linha no HTML gerado.

echo "<br>\n";

//Criação da variável "$Nome2";

$Nome2 = "Augusto";

//Impressão da mensagem sobre o que irá acontecer a seguir.

echo '<strong>Impressão da variável $Nome2 :</strong>'."<br>\n";

//Impressão da variável "$Nome2".

echo $Nome2;

//Quebra de linha.

echo "<br>\n";

//Criação da variável "$Sobrenome", a qual terá a função de guardar a string "Chaves".

$Sobrenome = "Chaves";

//Impressão da mensagem do que acontecerá a seguir.

echo '<strong>Impressão da variável $Sobrenome :</strong>'."<br>\n";

//Impressão da variável "$Sobrenome".

echo $Sobrenome;

//Quebra de linha.

echo "<br>\n";

//Criação da variável "$Sobrenome2" que terá como função armazenar a variável "Izabel".

$Sobrenome2 = "Izabel";

//Impressão da mensagem do que irá acontecer a seguir, com uso da tag "<strong>", que tem como função deixar o texto em negrito.

echo '<strong>Impressão da variável $Sobrenome2 :</strong>'."<br>\n";

//Impressão da variável "$Sobrenome2".

echo $Sobrenome2;

//Quebra de linha.

echo "<br>\n";

//Criação da variável "$NomeCompleto", que terá como função armazenar o valor das variáveis "Nome" e "$Nome2".

$NomeCompleto = $Nome." ".$Nome2;

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão da variável $NomeCompleto :</strong>'."<br>\n";

//Impressão da variável "$NomeCompleto".

echo $NomeCompleto;

//Quebra de linha.

echo "<br>\n";

//Criação da variável "$SobrenomeCompleto", que terá como função armazenar as variáves "$Sobrenome" e "$Sobrenome2".

$SobrenomeCompleto = $Sobrenome." ".$Sobrenome2;

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão da variável $SobrenomeCompleto :</strong>'."<br>\n";

//Impressão da variável "$SobrenomeCompleto".

echo $SobrenomeCompleto;

//Quebra de linha.

echo "<br>\n";

//Criação da variável "$NomesCompletos", que terá a função de armazenar os valores das variáveis "$NomeCompleto" e "SobrenomeCompleto".

$NomesCompletos = $NomeCompleto." ".$SobrenomeCompleto;

//Impressão da variável da mensagem do que irá acontecer a seguir, com uso da tag "<strong>", para que o texto fique em negrito.

echo "<strong>Impressão do nome completo do usuário :</strong><br>\n";

//Impressão da variável "$NomesCompletos"

echo $NomesCompletos;
?>