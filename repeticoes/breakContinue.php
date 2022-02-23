<div class="titulo">Break/Continue</div>

<?php

$cont = 10;

for(;;){
    echo "$cont<br>";
    $cont++;
    if($cont > 20){
        break;
    }
}// se for maior do que 20, a repetição para.

echo "Fim!";
echo"<hr><br>";

for(;;){
    $cont++;
    if($cont %2 === 1){
        continue;
    }
    if($cont >50){
        break;
    }
    echo "$cont <br>";

}// numeros impares vão encontrar o continue e pular para a proxima repetição, ou seja, só vão ser imprimidos os pares.
echo "Fim!";
echo"<hr>";


foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor<br>";

}// criei o array já dentro do foreach
// só vou imprimir os impares
echo "Fim!";
echo"<hr>";

