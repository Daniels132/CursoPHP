<div class="titulo">Desafio Operadores Lógicos</div>

<!--
Dois trabalhos -> terça e quinta
- Se os dois trabalhos forem executado -> tv 50 e sorvete
- Se apenas um for executado -> tv 32 e sorvete
- Se nenhum for executado -> Fica em casa mais saudável
-->

<form action="#" method="post">
    <div>
        <label for= "t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for= "t1">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button, select{
        font-size:1.4rem;
    }
</style>
<?php

$result1= !!$_POST['t1'];  //pegar informação do T1 e mudar de string pra bool
$result2= !!$_POST['t2'];  //pegar informação do T2 e mudar de string pra bool


if($result1 && $result2){
    echo "TV de 50 e sorvete";
}
elseif($result1 || $result2){
    echo"TV de 32 e sorvete";
}
else{
    echo"Fica em casa mais saudável";
}