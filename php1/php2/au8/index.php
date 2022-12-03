<?php
    //Maiúsculas e Minúsculas
    //O PHP contém algumas funções para transformar as strings
    $a = "joao ribeiro";
    $b = "ANA CAROLINA";
    $c = "Francisco Santos";

    //strtoupper - transforma uma string para maiúsculas
    echo strtoupper($a); //JOAO RIBEIRO
    echo "\n";
    echo strtoupper($c); //FRANCISCO SANTOS
    echo "\n";

    $a = "João Luís";
    echo strtoupper($a); // JOãO LUís
    echo "\n";

    echo mb_strtoupper($a); //JOÃO LUÍS - as funções mb_ * são designadas por funções multibyte e estão relacionadas com os sistemas de codificação de caracteres.
    echo "\n";

    echo ucfirst('joão luís'); // João Luís
    echo "\n";

    echo ucfirst('índice'); //índice
    echo "\n";

    //uc = upper case | lc = lower case
?>