<?php
    $nome = "Cleverson";
    $apelido = "Teguinha";
    $carac = strlen($nome) + strlen($apelido);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1>Meu nome é <?php echo "$nome"." "."$apelido"; ?></h1>
    <p>O meu nome tem <?php echo "$carac"; ?> caracteres.</p>
</body>
</html>