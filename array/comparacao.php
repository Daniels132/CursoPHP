<div class="titulo">Comparação Arrays</div>

<?php

$arr1 = ['nome' => 'Daniel', 'idade' => 21];
$arr2 = ['nome' => 'Daniel', 'idade' => 21];

var_dump($arr1 === $arr2);


$arr3 = ['idade' => 21, 'nome' => 'Daniel' ];
echo'<br>';
var_dump($arr1 == $arr3); // true
var_dump($arr1 === $arr3); // false por conta da ordem ser diferente


// == igual ===estritamente igual, != diferente !== estritamente diferente. 
