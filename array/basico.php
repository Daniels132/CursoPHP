<div class="titulo">Array</div>

<?php

// array armazena varios valores dentro de uma variável
$lista = array(1, 2, 3.4, "texto");
var_dump($lista);
echo '<br>';
echo $lista[3];// escolhi a posição da string texto
echo '<br>';
print_r($lista);
echo '<br>';
echo $lista[0];
echo '<br>';
$lista[0] = 1234656; // alterei o valor do indice 0
echo $lista[0];