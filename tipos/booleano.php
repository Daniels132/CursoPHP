<div class="titulo">Booleano</div>

<?php

echo TRUE; // 1
echo'<br>';
echo FALSE;

echo'<br>';

var_dump(true);
echo'<br>';
var_dump(False);
echo'<br>';
var_dump('false');
echo'<br>';
echo is_bool(false); // é um valor booleano ? 
echo'<br>';
echo is_bool('True'); // é um valor booleano ? 
echo'<br>';

// fazer regras de conversões

echo '<p> Regras: </p>';
echo'<br>';
var_dump((bool) 0); // entre () faz a conversão no var_dump
echo'<br>';
var_dump((bool) 20);
echo'<br>';
var_dump((bool) -1);
echo'<br>';
echo var_dump((bool) ""); // string vazia é false, qualquer valor diferente de 0 da true
echo'<br>';
echo var_dump((bool) " "); // com espaço da true por que o vazio conta como um espaço


