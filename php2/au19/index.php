<?php
    /*Com as funções strpos e strrpos vamos buscar a posição de uma needle dentro de uma haystack. No caso dessas funções, elas são case sensitive (São sensíveis a maiúsculas e minúsculas.)
    
    Se pretendermos fazer a mesma pesquisa, mas por case insensitive, usamos as funções stripos e strripos*/

    $a = "Este quarto Tem luz";
    $pos = strpos($a,'T'); //12

    $pos = stripos($a,'T');//2
?>