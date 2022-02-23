<div class="titulo">Função & Escopo</div>

<?php

function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a Proxima!<br>";
    
}// defini a função.
imprimirMensagens();// chamei a função
imprimirMensagens();
imprimirMensagens();
imprimirMensagens();
//o objetivo de funções é a reutilização de códigos, eu posso chamar a função imprimirMensagens quando eu quiser para executar o código dentro dela.

$variavel = 1;
function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel<br>";
    
}
// o valor de $variavel muda apenas dentro da função por conta do escopo, o php entende que a variavel da função é alocada em outro espaço de memória diferente da variavel fora da função.
echo "Antes da Função: $variavel<br>";
trocarValor();
echo "Depos da Função $variavel<br>";
echo "<hr>";


function trocaValorDeVerdade(){
    global $variavel; 
    $variavel = 3;
    echo "Durante a função: $variavel<br>"; 
}//para trocar o valor da variavel fora do escopo, utilizar a palavra global, ai o php entende que estamos utilizando a mesma variavel.
echo "Antes da Função: $variavel<br>";
trocaValorDeVerdade();
echo "Depos da Função $variavel<br>";

var_dump(trocaValorDeVerdade());


