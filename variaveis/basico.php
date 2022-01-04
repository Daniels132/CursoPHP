<div class="titulo">Variáveis</div>

<?php

$numeroA =  13;
echo $numeroA;
var_dump($numeroA);

 echo '<br>';
 $a = 3;
 $b = 16;
 $soma = $a + $b;
 echo $soma;// setada

 echo '<br>';
 echo isset($soma);
unset($soma); // tira ela de setada para não setada. 
echo '<br>';
echo !isset($soma); // simbolo de negação ! serve como diferente de, então ele vai printar 1 na tela por que ela não está setada
// isset verifica se a variável está setada

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variável 

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5= 'valida'; // evitar
//$6var = 'invalida';
//$%7var = 'invalida';
echo '<br>';
$Var21 = 'teste';
echo $Var21;

echo '<br>';

//variaveis pré definidas.

var_dump($_SERVER["HTTP_HOST"]); // $_SERVER é uma variável pré definida com um array de 49 posições > porém eu passei a posição http_host pra me retornar informação do meu localhost.
