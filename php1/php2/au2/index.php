<?php
    /*
     É a instrução mais usada para apresentar conteúdo PHP numa página web. Também podemos usar o print, mas é ligeiramente mais lento e tem menos potencial. Podemos usar o echo com o sem parêntesis
     */
    $nome = "Cleverson";
    $apelido = "Teguinha";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1><?php echo $nome . ' '. $apelido?></h1>

    <br>

    <?="$nome $apelido"?>

</body>
</html>