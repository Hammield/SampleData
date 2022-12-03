<?php
    /*A função substr(substring) é usada com muita frequência para capturarmos uma parte de uma string, seja para criar uma nova variável ou simplesmente para apresentar uma parte de uma string. Acontece que esta função tem muito mais nuances do que habitualmente estamos habituados a usar. */

    $a = "Esta frase é para testes.";
    $b = mb_substr($a, 5 , 10); //$b = 'frase é p';
?>