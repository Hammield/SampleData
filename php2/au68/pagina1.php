<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    
    <h3>Página 1</h3>

    <?php
        $nome = 'Joao';
    ?>

    <p><?= $nome ?></p>

    <a href="pagina2.php?nome=Joao<?php $nome?>">Ir para a página 2</a>

</body>
</html>