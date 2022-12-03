<?php
    /*A escrita do código PHP deve ser o mais simples possível para facilitar a leitura do fluxo. Por outro lado, devemos procurar criar condições para rapidamente alterar o aspeto visual dos dados que apresentamos */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        .cor{
            color: red;
        }
    </style>
</head>
<body>
    
    <?php
    //usando só o PHP
    for ($i = 100;$i<120;$i++){
        echo "<p>$i</p>";
    }
    ?>

</body>
</html>