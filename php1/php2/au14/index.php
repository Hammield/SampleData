<?php
    /*STR_REPLACE: Tal como o nome deixa claro, permite fazer subistituição de strings dentro de uma string. Neste caso, substitui todas as ocorrências de uma string que exista dentro de uma outra string.*/

    $a = "Este texto serve para testar o sistema.";
    echo str_replace('te', "TE", $a);
    //EsTE TExto serve para TEstar o sisTEma.
    //Existe um quarto parâmetro, opcional, que permite definir quantas subistituições vão ser feitas. Quando é ignorado, são feita todas as subistituições.

    //Podemos usar arrayas nos dois primeiros parâmetros com os seguintes resultados:

    $a = "Este texto serve para testar o sistema.";
    $vogais = ['a','e','i','o','u','A','E','I','O','U'];
    $b = str_replace($vogais, "", $a);
    //$b = "st txt srv pr tstr sstm.";

    //Existe também a função str_ireplace() que, como o 'i' indica, executa a mesma operação, mas é case insensitive.
?>