<div class="titulo">Interpolação</div>

<?php
// interpolação serve para substituir a concatenação de strings com variaveis, usa-se aspas duplas.

$numero = 10;
echo $numero;
echo '<br> $numero'; // imprime literalmente $numero
echo "<br> $numero"; // imprime o valor da variável

$texto =  "A sua nota é $numero";

echo "<br> $texto";
$objeto = 'caneta';

echo "<br> Eu tenho 5 $objeto"; 
echo "<br> Eu tenho 5 {$objeto}s."; // adiciona um s para a string da variável.
echo "<br> Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s";