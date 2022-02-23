<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$sortear = array_rand($nomes);
echo "<h1>$nomes[$sortear]</h1>";