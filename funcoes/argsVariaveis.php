<div class="titulo">Argumentos Variáveis</div>

<?php

function soma($a, $b){
    return $a + $b;
}
echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>';// não soma todos os valores porque temos apenas dois argumentos passados na função.

function somaCompleta(...$numeros){// quando coloco os ..., os parametros passados para meu argumento virão em forma de um array
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
} // dessa forma podemos somar quantos numeros quiser passando o parametro da função
echo somaCompleta(1,2,3,4,5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array). '<br>';// substitui o array pelo conteudo dentro do array, caso não tenha os ..., a função vai receber um array dentro de outro array

function membros($titular, ...$dependentes){
    echo "Titular: $titular<br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

membros("Daniel", "Gabi", "Ana");

// resumindo: ... define um argumento variável.