<?php
    /*Com o PHP 7 foi introduzido o Operador de Coalescência de Nulos, Coalescência significa aglutinação ou junção de itens separados
    
    Basicamente este operador é um atalho para alguns casos do operador condicional ternário.*/

    $x = null;
    $nome = $x ?? 'Sem nome';

    //Este exemplo é semelhante a:
    $nome1 = isset($x) ? $x : 'Sem nome';
?>