<?php

$nome = 'Meu nome';
$idade = 47;
$acordado = true;

if(is_array($nome)){
    echo 'É um array.';//Não vai acontecer
}

if(is_bool($acordado)){
    echo 'É um valor booleano';//vai ser apresentado
}

/*
Outras funções similares:
is_callable()
is_float() ou is_double()
is_real()
is_int() ou is_integer()
is_long()
is_null()
is_numeric()
is_object()
is_string()

*/

?>