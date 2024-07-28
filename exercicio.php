<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/recursos/css/style.css">
    <link rel="stylesheet" href="/recursos/css/exercicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Exercicio</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Vizualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a  class="verde" href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?>>Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
        <?php include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")?>
        </div>
    </main>
    <footer class="rodape">
        CPD3R & ALUNOS © <?php date('Y'); ?>
    </footer>
</body>
</html>