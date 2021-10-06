<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos execícicos</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>
                        <strong>
                            Módulo 01
                        </strong>
                    </h3>
                    <ul>
                        <li> <a href="exercicio.php?dir=basico&file=ola">Ola PHP</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        <strong>Desenvolvidor por Vagner Matheus © <?= date('Y'); ?></strong>     
    </footer>   
</body>
</html>