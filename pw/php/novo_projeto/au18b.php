<?php
    echo 'nada n';
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
    <h1>teste</h1>
    <form action="recebe_get.php" method="get">
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome aqui"><br><br>
        <input type="text" name="idade" id="idade" placeholder="Digite sua idade aqui"><br>
        <hr>
        <button type="submit">Enviar:</button>
    </form>
</body>
</html>