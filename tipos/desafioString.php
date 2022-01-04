<div class="titulo">Desafio String</div>

<?php

// Avaliando os métodos da documentação da string,
// qual os métodos que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1 ?
echo stripos('!AbcaBcabc', 'abc');
echo '<br>';

// metodo stripos encontra a primeira ocorrencia abc na string !AbcaBcabc sem diferenciar maiusculo ou minusculos
echo strpos('!AbcaBcabc', 'abc');
echo '<br>';
// strpos leva em consideração maiusculas e minusculas, no caso de strpos, retornaria o valor 7