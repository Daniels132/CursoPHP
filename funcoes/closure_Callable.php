<div class="titulo">Closure e Callable</div>

<?php

// callable é uma coisa que pode ser chamada
$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}
echo $soma1(2, 3) .'<br>';
echo (is_callable($soma1) ? 'Sim': 'Não' ). '<br>';
echo soma2(2, 3) .'<br>';
echo (is_callable(soma2) ? 'Sim': 'Não' ). '<br>';

// CALLABLE qualquer tipo de função.
// CLOSURE => apenas funções anônimas são closure