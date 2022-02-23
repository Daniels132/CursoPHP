<div class="titulo">Desafio For</div>


<?php

/*
Imprimir 
#
##
###
####
#####
de duas maneiras
1) Pode usar incremento do tipo $i++
2) não pode usar incremento 
*/
$impressao = '';
for($count = 1; $count <=5; $count++){
    $impressao .= '#';
    echo "$impressao <br>";
}
echo "<hr>";
$array = ['#', '##', '###', '####', '#####'];
for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]}<br>";
}
echo "<hr>";
for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .='#'){
    echo "$impressao2<br>";
}

//mesmo resultado para os 3 for 
