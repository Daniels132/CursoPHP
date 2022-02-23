<div class="titulo">Operações</div>
<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;


echo is_array($dadosCompletos); // verifica se é array
echo '<br>'. count($dadosCompletos); // conta quantos elementos tem dentro do array
echo '<br>';

$indice = array_rand($dadosCompletos); // pega um elemento aleatório do array

echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";
echo '<br>';
unset($dadosCompletos['nome']); // tira os valores de dados completos, deixa como se nunca fosse setado
print_r($dadosCompletos);

//unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
echo '<br>';
$decimais = $pares + $impares;
print_r($decimais);
 $decimais = array_merge($pares, $impares); // junta os arrays impares com pares, porém a sequencia vai de acordo com o que vem primeiro dentro da função, primeiro vao ser os pares e depois os impares
 echo '<br>';

 print_r($decimais);

 sort($decimais); //ordena a sequencia dos arrays que foram mergeados
 echo '<br>';
 echo '<br>';
 print_r($decimais);