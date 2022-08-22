<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: darkred;
        }
    </style>
    <?php 
    $html = "<h1>Aqui está!</h1><p>Aqui estão todos.</p><script>window.alert('isso é um alerta!')</script>";
    ?>
</head>
<body>
    <h1><?php echo $html; ?></h1>
    <?php $ativado = 'sim'; ?>
    <?php if ($ativado == 'sim') { ?>
        <h1>Está ativado</h1>
        <?php }else { ?>
            <h1>Não está ativado</h1>
        <?php } ?>
</body>
</html>