<div class="titulo">Usando Tipos</div>

<?php

function somar1($a, $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(25, 75) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, 75) . '<br>';


function somar2(int $a, int $b){
        echo "<span> Somando $a + $b = </span>";
        return $a + $b;
}// consigo declarar um tipo para as variaveis que estão dentro da função(Argumento), porém não consigo add um tipo para uma variavel comum (sem estar na função)
echo somar2(25, 75) . '<br>';
echo somar2(1.7, 2.5) . '<br>';//nao retornou o valo correto por que se trata de um float e eu adicionei o tipo inteiro para os argumentos 
echo somar2(1, 75) . '<br>';

function somar3($a, $b): int{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}// apenas a resposta/retorno sofre a alteração, diferente de somar2() que eu passei os argumentos de entrada pra int
echo somar3(25, 75) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, 75) . '<br>';