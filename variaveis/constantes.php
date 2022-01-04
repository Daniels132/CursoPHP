<div class="titulo">Constantes</div>

<?php

//declaradas como define ou const, é padrão utilizar sempre letras maiusculas para constantes.
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;

echo "<br>";
echo NOVA_TAXA;

$valorVariavel = 2.8;

define('NOVISSIMA_TAXA', $valorVariavel);
echo "<br>";
echo NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

