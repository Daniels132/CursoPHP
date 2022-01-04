<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href= "assets\CSS\estilo.css">
    <link rel = "stylesheet" href= "assets\CSS\exercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Exercício</title>
</head>
<body class = "exercicio">
    <header class = "cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercí­cio</h2>
    </header>
    <nav class="navegacao">
        <a href = <?="{$_GET['dir']}/{$_GET['file']}.php"?> class = "verde">Sem formatação</a>
        <a href = "index.php" class = "vermelho">Voltar</a>
    </nav>
    <main class = "principal">
        <div class ="conteudo">
            <?php
            include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class = "rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
    
</body>
</html>