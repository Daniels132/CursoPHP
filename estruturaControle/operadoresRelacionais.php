<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // True
var_dump(1 > 1); // False
var_dump(1 >= 1); // True
var_dump(1 != 1); // False
var_dump(1 <> 1); // False
var_dump(111 == '111'); // True
var_dump(111 === '111'); // False porque verifica o tipo também
var_dump(111 != '111'); // False
var_dump(111 !== '111'); //True


echo"<p> Usando os Relacionais no If/Else</p><hr>";

$idade = 75;

if($idade < 18){
    echo "Menor de idade = $idade anos <br>";
}
else if ($idade <= 65){
    echo "Adulto = $idade anos <br>";
}
else{
    echo "Idoso =  $idade anos";
} 

echo "<p>Spaceship</p><hr>";
// spaceship <=>
var_dump(500 <=> 3); // retorna 1
var_dump(50 <=> 50); // retorna 0
var_dump(5 <=> 50); // retorna -1
?>

