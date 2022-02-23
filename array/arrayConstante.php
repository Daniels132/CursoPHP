<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['Laranja', 'Abacaxi'];

//FRUTAS[0] =  'banana'; -> da erro por que os elementos do array não podem ser alterados por se tratarem de uma constante, isso acontece no php mas em outras linguagens pode ser diferente
//FRUTAS[] = 'banana'; -> adicionar elementos também da erro pelo mesmo motivo
echo FRUTAS[0];
echo '<br>';

const CARROS = array("Fiat" => "Uno", "Ford" => "Fiesta"); // outra forma de acionar um array, mas tem o mesmo resultado do primeiro
echo CARROS["Fiat"];
// também pode se usar define() para definir uma constante.