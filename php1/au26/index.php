<?php
    #sem match
    $x = 10;

    switch ($x){
        case 5:
            echo "parou no 5";
            break;
        case 10:
            echo "parou no 10";
            break;
        case 15:
            echo 'parou no 15';
            break;
        default:
            echo "é um número diferente de 5,10 ou 15";
            break;
    }
    echo "<br>";
    #com match

    echo match($x){
        5 => 'parou no 5',
        10 => 'parou no 10',
        15 => 'parou no 15',
        default => 'é um número diferente de 5,10 ou 15'
    };
    #no match apenas uma expressão é válida por cada condição.

    #importante
    #no Switch, as comparações podem ser feitas só por valor (==)
    #no caso do Match, são sempre feitas por valor e tipo (===)
?>