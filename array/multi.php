<div class="titulo">Arrays Multidimensionais</div>

<?php

$dados = [
    [
        "nome" => "Daniel",
        "idade" => 21,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
];
// index 0 vai ser o primeiro array, o 1 vai ser o segundo e assim por diante, aqui eu coloquei um dois arrays dentro de um só 

print_r($dados);
echo '<br>' . $dados[0]["idade"];
echo '<br>' . $dados[1]["idade"];

$dados[] = [
    "nome" => "Gabriela",
    "idade" => 20,
    "naturalidade" => "São Paulo"
]; // adicionei mais um array dentro do array principal  $dados
echo '<br>' . $dados[2]["idade"].' '.$dados[2]["nome"];

$dados[2]["vizinho"] = "Chaves"; // adicionei ao array do indice 2, um campo chamado vizinho com o valor chaves
echo '<br>' . $dados[2]["vizinho"];

unset($dados[1]);
echo '<br>';

print_r($dados);