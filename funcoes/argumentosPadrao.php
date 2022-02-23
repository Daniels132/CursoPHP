<div class="titulo">Argumento Padrão</div>

<?php
// meu argumento já tem um parametro padrão definido no começo da função, então quando eu for passar os parametros, eu não preciso passar o valor desses argumentos.
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome!<br>";
}
echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Daniel', 'Lindo');


function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
   
}
echo anotarPedido('Hot-Dog');
echo anotarPedido('Pizza', 'Coca-Cola');

// Sempre passar o argumento variavel por ultimo. 