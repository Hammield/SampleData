<?php
    $questao = "Qual é a capital de portugal?";
    $respostas = [
        "Lisboa",
        "Porto",
        "Coimbra"
    ];

    shuffle($respostas);
    print $questao . PHP_EOL;
    foreach($respostas as $resposta)
    echo "> $resposta". PHP_EOL;
?>