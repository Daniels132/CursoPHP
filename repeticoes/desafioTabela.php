<div class="titulo">Desafio Tabela</div>


<?php

$array = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];
?>
<table>
    <?php
    foreach($array as $linha){
        echo"<tr>";
        foreach($linha as $valor){
            echo"<td>$valor</td>";
        }
        echo"</tr>";
    }
    ?>
</table>
<table>
    <?php
    foreach($array as $index => $linha){
        $style = $index % 2 === 1 ?'background-color: lightblue;': '';
        echo"<tr style='{$style}'>";
        foreach($linha as $valor){
            echo"<td>$valor</td>";
        }
        echo"</tr>";
    }
    // usei $index => $linha para percorrer o indice do array e assim poder adicionar o estilo nos indices impares
    //sempre que tiver duvidas sobre array, olhar o capitulo array e também a aula de foreach
    ?>
</table>

<style>
    table{
        border: 1px solid  #444;
        border-collapse: collapse;
        margin: 20px 0px;
        
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding:10px 20px;

    }
</style>