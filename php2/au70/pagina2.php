<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <h3>Página 2</h3>

    <?php htmlspecialchars($nome = $_GET['nome']); ?>

    <p><?= $nome ?></p>

    <a href="pagina1.php">Ir para a página 1</a>
</body>
</html>