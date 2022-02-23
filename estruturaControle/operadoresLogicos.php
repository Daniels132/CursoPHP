<div class="titulo">Operadores Lógicos</div>

<?php
echo"<p>Negação Lógica</p><hr>";
var_dump(true);//true
echo '<br>';
var_dump(!true);//negação lógica, retorna false
echo"<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);// true
var_dump(true && false);// false
var_dump(false && false);// false
var_dump(true and 3 > 2);// true

echo"<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true or true); //true
var_dump(true || false); //true
var_dump(false or false); //false
echo"<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true); //false
var_dump(false xor false); // false
var_dump(true xor false); //true

echo "<p class = 'divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}
elseif($idade >=65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}
else{
    echo "Não pode se aposentar";
}
?>
