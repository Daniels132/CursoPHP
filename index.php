<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href= "assets\CSS\estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Curso PHP</title>
</head>
<body>
    <header class = "cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <main class = "principal">
        <div class ="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                <ul>
                    <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                    <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                    <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                    <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                    <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                <ul>
                    <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Operações Aritiméticas</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=desafioPrecedencia">Desafio Precedência</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=desafioString">Desafio String</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=booleano">Booleano</a></li>
                    <li><a href="exercicio.php?dir=tipos&file=conversao">Conversões</a></li>
                </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Tipos</h3>
                <ul>
                    <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=desafioEquacao">Desafio Equação</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=desafioVariaveis">Desafio Variáveis</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                    <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                </ul>
                </div>

                <div class=" modulo amarelo">
                    <h3>Estruturas de Controle</h3>
                <ul>
                    <li><a href="exercicio.php?dir=estruturaControle&file=ifelse">Variáveis</a></li>
                </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class = "rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
</body>
</html>