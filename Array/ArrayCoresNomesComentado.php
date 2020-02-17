<?php

//Criado por José Augusto Chaves Izabel

//17/02/2020

//Código com a intenção de criar um array, o primeiro com uma lista de cores e o segundo com uma lista de nomes.

//Criação do array "$Cores".

$Cores = array("Azul", "Verde", "Vermelho", "Amarelo", "Roxo", "Preto", "Cinza", "Branco", "Laranja", "Bege", "Lilás", "Rosa");

//Criação do array "$Nomes".

$Nomes = array("Maria", "Edna", "José", "Augusto", "Almir", "Ana", "Luisa", "Roberto", "Ricardo", "Luciana", "Natália", "João");

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão do primeiro número chamado no array "Cores":</strong>'."<br>\n";

//Impressão do número 7 do array "$Cores", o oitavo número pois o array começa do 0.

echo $Cores[7];

//Uso da tag "<br>", que serve para fazer uma quebra de linha na exibição final, e da "/n", que serve para fazer a quebra de linha no HTML que será gerado.

echo "<br>\n";

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão do primeiro número chamado no array "Nomes":</strong>'."<br>\n";

//Impressão do número 3 do array "$Nomes", o quarto número.

echo $Nomes[3];

//Quebra de linha.

echo "<br>\n";

//Impressão da mensagem do que irá acontecer a seguir.

echo '<strong>Impressão do segundo número chamado no array "Cores":</strong>'."<br>\n";

//Impressão do número 3 do array "$Cores", o quarto número.

echo $Cores[3];

//Quebra de linha

echo "<br>\n";

//Impressão da mesnagem do que irá acontecer a seguir, com uso da tag "Strong", que serve para deixar o texto em negrito.

echo '<strong>Impressão do segundo número chamado no array "Nomes":</strong>'."<br>\n";

//Impressão do número 7 do array "$Nomes", o oitavo número.

echo $Nomes[7];
?>