<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<p>Int para float</P>';
echo '<br>';
var_dump (PHP_INT_MAX + 1);
echo '<br>';
var_dump (1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';

// float para int

echo '<p>Float para int</P>';
echo '<br>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump((int) round (2.8)); // roud arredonda

// operações com string

echo '<p>Strings</p>';
var_dump(3 + "2"); // resulta em 5, no PHP.
echo '<br>';
var_dump("3" . 2); // concatena
echo '<br>';
echo is_string("3" . 2);
echo '<br>';
echo is_string("3" + 2);
echo '<br>';
//var_dump(1 + "5 cinco");