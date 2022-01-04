<div class="titulo">Atribuições</div>


<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

// Decremento, retira unidades da variável;
--$numero; // $numero = $numero - 1;
$numero--; // $numero = $numero - 1;
echo '<br>' . $numero;

$numero++; // $numero = $numero + 1;
++$numero; // $numero = $numero + 1;
//Incremento, aumenta unidade de uma variável;

// para retirar ou adicionar mais de uma unidade, usar a formula abaixo
$numero = 11; // substitui o valor da variavel;
$numero += 10; // adiciona 10 para a variável
echo '<br>' . $numero;
$numero -= 20;
echo '<br>' . $numero;
$numero *=20;
echo '<br>' . $numero;
//podemos utilizar qualquer operação aritimética nesse modelo (+=, -=, *=, **=, /=, %= ...)
$numero .=4;  // APENAS CONCATENA COM 4

// strings

$texto = 'Esse é um texto';
$texto =  $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

//$variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; // se a variavelInexistente for inexistente, irá aparecer o default, mas se ela existir e tiver um valor, vai aparecer o valor dela
var_dump($variavelInexistente);

echo '<br>' . $valor;
