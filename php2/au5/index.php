<?php
    $apresentar = true;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        .borda{
            border: 1px solid black;
            width: 200px;
            height: 150px;
        }
    </style>
</head>
<body>
    
  

    <?php if($apresentar):?>
        <p>Este parágrafo é para ser apresentado</p>
        <div class="borda"></div>
    <?php else:?>
        <p>Este parágrafo <strong>não é para ser apresentado</strong></p>
    <?php endif;?>

</body>
</html>