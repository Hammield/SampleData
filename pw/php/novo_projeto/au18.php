<?php
/* $_GET */
if (isset($_GET['nome'])){
    $nome = htmlspecialchars($_GET['nome']);
}else{
    $nome = htmlspecialchars("Mundo");
}

if (isset($_GET['cor'])){
    $cor = $_GET['cor'];
}else{
    $cor = 'white';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body <?php if ($nome == "Heffield"){ echo "style='background:darkblue;color:white;'";}?>>
    <h1>Olá <?php echo $nome; ?></h1>

    <a href="au18.php?nome=Cleverson&cor=salmon">Cleverson</a>
    <a href="au18.php?nome=Heffield">Heffield</a>
    <a href="au18.php?nome=Serkanovic&cor=green">Serkanovic</a>
    <a href="au18.php?nome=Regal&cor=yellow">Regal</a>

</body>
</html>