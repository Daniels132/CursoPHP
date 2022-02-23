<div class="titulo">Laço for</div>
<?php
//for é usado para uma quantidade determinada de repetições 

for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";

}
echo "<hr>";
for(; $cont <=10; $cont++){
    echo "$cont <br>";


}// continuação do primeiro for

echo "<hr>";
for(; $cont <=15;){
    echo "$cont <br>";
    $cont++;
}
$array = [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 
'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo '<br>';
echo "<hr>";
// enquanto i for menor que array, vai repetir o laço 
for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";

}

echo "<hr>";
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];


for($i = 0; $i <count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo"{$matrix[$i] [$j]}<br>";
        
    }
}
