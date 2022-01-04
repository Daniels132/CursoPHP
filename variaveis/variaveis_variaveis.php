<div class="titulo">Variáveis Variáveis</div>

<?php
 $a = 'ValorA'; 
 $$a = 'ValorAA';
 // é como se eu estivese criando uma variável com nome $valorA.
 echo "$a {$$a} {$a}";
 echo '<br>';
 $epa = 'opa';
 $opa = 'vish';
 echo "$epa {$$epa}";