<div class="titulo">Desafio Palindromo</div>

<?php

function detectar($palavra){
    $palavra = strtolower($palavra);
    if(strrev($palavra) == $palavra){
        return "é um palindromo";
    }
    else{
        return "não é um palindromo";
    }

}

$str = "Arara";
echo $str . ' ' . detectar($str);
echo "<hr>";

function palindromo($palavra){
    $palavra = strtolower($palavra);
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $palavra; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return "não é um palindromo";
        }
       return "é um palindromo";
    }
}
$str = "Arara";
echo $str . ' ' . palindromo($str);