<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo'<br>';
var_dump("Eu também");
echo'<br>';

// concatenação em php é com ponto

echo "Nós" . " Também";
echo'<br>';
echo "Também", " aceito", " virgulas";
echo'<br>';
echo "'Teste'" . ' "Teste"' . ' \'Teste\' ' . " \"Teste\"";

print("<br>Também existe a função print");
echo'<br>';
print "também existe a função print sem o ()";
echo'<br>';
echo ("Também existe o echo com o ()");

// Algumas funções
// todos são metodos de string 
echo'<br>' , strtoupper('maximizado'); 
echo'<br>' , strtolower('MINIMIZADO'); 
echo '<br>', ucfirst('só a primeira letra maiuscula');
echo '<br>', ucwords('todas as palavras com a primeira maiuscula');
echo '<br>', strlen('Quantas letras');
echo '<br>', mb_strlen("Eu também", "utf-8"); // função de contagem buga com acentos
echo '<br>', substr('Só uma parte mesmo', 7, 6); // apenas a parte na posição selecionada
echo '<br>', str_replace('isso', 'aquilo', 'trocar isso por aquilo'); // primeira posição palavra que vai ser trocada, posição 2 a palavra nova e 3 a frase
