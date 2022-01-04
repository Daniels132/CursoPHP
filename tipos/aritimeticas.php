<div class="titulo">Operações aritiméticas</div>


<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>'; // se tiver int + float, o resultado vem float
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; // padrão php retorna numero quebrado
echo intdiv(7, 4), '<br>'; // função int div retorna o valor sem o numero quebrado
echo round(7 / 4), '<br>'; // retorna o valor arredondado para int
echo 7 % 4, '<br>';
// echo 7 / 0, '<br>'; // retorna INF (infinito)
// echo intdiv(7, 0), '<br>', //retorna um erro
echo  4 ** 2, '<br>';


// Precedência de operadores:
// () => ** => / * => + - 
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; // Primeiro multiplicação
echo (2 + 3) * 4, '<br>'; // Primeiro a soma, use () para a operação que quer fazer primeiro