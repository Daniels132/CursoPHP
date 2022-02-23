<div class="titulo">Desafio Tabela #2</div>

<form action="#" method="post">
    <label for="Linhas">Linhas</label>
    <input type="number" name ="Linhas" value="10">
    <label for="Coluna">Coluna</label>
    <input type="number" name ="Coluna" value="10">
    <button>Enviar</button>
</form>

<table>
<?php
$linhas = intval($_POST['Linhas']);
$colunas =intval($_POST['Coluna']);
$num = 1;
if(!$linhas) $linhas = 10;
if(!$colunas) $linhas = 10;

for($i=0; $i < $linhas; $i++){
    echo "<tr>";
    for($j=0; $j < $colunas; $j++){
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}

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