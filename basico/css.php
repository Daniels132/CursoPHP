<div class="titulo">Integração CSS</div>
<h1 azul center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo';
    echo '</small>';
    ?>
</h1>


<?= "<div center> Outra forma de me expressar </div>" ?>

<br> 

<div center> <button dobro><?= "Legal" ?></button></div>

<style>
    button{
        padding: 5px <?= 2 * 10 ?>;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;

    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: <?= 10 - 8 ?>rem;
    }
    /* Qualquer elemento HTML que tiver a propiedade center, azul ou dobro sera alterado pelo css,
     assim não necessita ficar colocando class = "center" nos elementos*/
</style>