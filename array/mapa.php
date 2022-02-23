<div class="titulo">Mapa</div>

<?php
// diferente da aula basica, aqui eu passei uma chave e coloquei um valor para essa chave, ao invés de passar diretamente o valor no array
$dados = array(
    1,
    "idade" => 25,
    2,
    "cor" => "azul",
    "peso" =>49.8
);

echo $dados["peso"];
echo'<br>';
print_r($dados);

$dados[] = "altura"; // add altura no indice 0
$dados["cpf"] = 51255612; // add uma nova chave com o valor 51255612
print_r($dados);