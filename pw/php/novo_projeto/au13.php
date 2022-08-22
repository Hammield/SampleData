<?php
    $num = 9;
    if ($num == 7){
        echo ("Número 7.");
    } elseif ($num > 7) {
        echo ("É maior que o 7.");
    } else {
        echo ("Não é o número 7 e nem maior que ele.");
    };

    echo ('<br>');

    $cor = "vermelho";

    switch($cor){
        case "vermelho":
            echo "A cor é vermelho";
            break;
        case "azul":
            echo "A cor é azul";
            break;
        case "rosa":
            echo "A cor é rosa";
            break;
        default:
        echo "A ${cor} não é conhecida";
    }
?>