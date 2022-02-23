<div class="titulo">Foreach</div>

<?php

//indicado para percorrer arrays

$array = [ 1=> 'Domingo', 'Segunda', 'Terça', 'Quarta', 
'Quinta', 'Sexta', 'Sábado'];


foreach($array as $dias){
    echo "$dias <br>";
}

foreach($array as $indice => $dias){
    echo "$indice => $dias <br>";
}// adicionei o indice associado aos valores do array

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha){
    //echo "$linha <br>";
    foreach($linha as $valor){
        echo "$valor<br>";
    }
}

$numeros = [1, 2, 3, 4 , 5];

foreach ($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}// além de mexer nos resultados alterei o array em si
