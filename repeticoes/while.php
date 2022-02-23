<div class="titulo">While/Do While</div>

<?php

const VALOR_LIMITE = 5;
$contador =0;

while ($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}
echo "<hr>";
$contador = 100;
do{
    echo "while $contador <br>";
    $contador++;
}
while ($contador < VALOR_LIMITE);
// do while executa pelo menos uma vez, por que a expressão fica depois do bloco de código
    
// do while é a unica estrutura de controle que termina com ;

$contador = 0;
while(true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >=VALOR_LIMITE) break;
}// laço infinito, acaba por conta do break adicionado dentro do código