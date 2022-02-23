<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; $numero--){
    $soma += $numero;
    }
    return $soma;
}
// += operador de atribuição -> $soma = $soma + $numero
echo somaUmAte(4). '<br>';

function somaRecursivaUmAte($numero){
    //condição de parada
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10);

//resumindo: recursividade, a função vai chamar ela mesma até que haja uma condição de parada.