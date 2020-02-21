<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Uso do "Isset" em conjunto com o "if" e "else".

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criação de variável.

$Nome = "José Augusto Chaves Izabel";

//Criação de variável.

$Nascimento = 1999;

//Impressão de mensagem.

echo '<strong>Tentativa de impressão da variável "$Nome" e "$Nascimento" :</strong>"'."<br>\n";

//Quebra de linha.

echo "<br>\n";

//Uso do "Isset" em um "if" para testar se "$HelloWorld" existi.

if(isset($Nome)){

    //Impressão de mensagem e quebra de linha.

    echo $Nome."<br/>\n";

    //Quebra de linha.

    echo "<br>\n";

    //Impressão de mensagem e quebra de linha.

    echo "<strong>Passou pelo Isset!!</strong><br>\n";

    //Impressão de mensagem.

    echo '<strong>A variável $Nome existe!!</strong>';

    //Quebra de linha.

    echo "<br>\n";

    //Quebra de linha.

    echo "<br>\n";

    //Impressão de variável.

    echo $Nascimento;
    
    //Quebra de linha.
    
    echo "<br>\n";
    
    //Quebra de linha.
    
    echo "<br>\n";
}

//Uso do "else" para testar a existência da variável.

else{

    //Impressão de mensagem.

    echo "<strong>Não passou pelo Isset!!</strong><br>\n";
    
    //Impressão de mensagem.
    
    echo '<strong>A variável $Nome não existe!!</strong>';
};

echo '<strong>Tentativa de impressão da variável "$Teste :</strong>"'."<br>\n";
echo "<br>\n";

if(isset($Teste)){
    echo $Teste."<br/>\n";
    echo "<strong>Passou pelo Isset!!</strong><br>\n";
    echo '<strong>A variável $Teste existe!!</strong>';}
    else{
        echo "<strong>Não passou pelo Isset!!</strong><br>\n";
        echo '<strong>A variável $Teste não existe!!</strong>';
};

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
