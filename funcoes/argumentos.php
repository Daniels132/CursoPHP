<div class="titulo">Argumentos e Retorno</div>


<?php
function obterMensagem(){
    return 'Seja Bem vindo(a)';
}

obterMensagem(); // n retorna nada no browser

$m = obterMensagem();
echo $m;
echo '<br>'. obterMensagem();

var_dump(obterMensagem());

// diferente do echo, se eu coloco return na função, ao dar um var_dump ele retorna o valor que está na função, se fosse echo, retornaria null
// echo apenas mostra uma mensagem, por isso retorna null quando a função é chamada pelo var_dump.
// return é mais indicado do que echo para funções, por que podemos armazenar os valores do return dentro de outras variaveis e também aplicar metodos para formatação.


function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>'. obterMensagemComNome('Daniel');
echo '<br>'. obterMensagemComNome('Gabi');
// utilizei $nome como parametro e ao chama a função passei o valor desejado para a variavel $nome

function soma($a, $b){
    return $a + $b;

}

echo '<br>'. soma(25, 25);
echo '<br>'. soma(25, 6);

$x = 10;
$y = 20;
echo '<br>'. soma($x, $y);// pode ser feito dessa forma também.

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo "<br> $variavel";
// por padrão não vai mudar, por que a atribuição é feita por valor e não por referência.

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;

}

trocaValorDeVerdade($variavel, 5);
echo "<br> $variavel";//defini $a para receber $variavel por referencia, por isso gerou impacto.
