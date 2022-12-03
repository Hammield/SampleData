<?php
    #Trim remove os espaços e outros caracteres do inicio e do final de uma string
    #ltrim e rtrim removem os espaços e outros caracteres do início ou fim da string

    $a = "                   isto é uma string.       ";
    //-----
    $a = trim($a); //"Isto é uma string

    //Podemos usar um segundo parâmetro nestas funções

    $a = "abcdef";
    echo trim ($a, 'a'); // "bcde
    echo trim ($a, 'af'); // "bcde"
    echo trim ($a, 'abef'); //"cd"

    // por exemplo, apesar de existirem outras formas, podemos "limpar" o $_POST
    $usuario = trim($_POST['usuario']);

    //Não usem nas senhas.Elas podem conter propositalmente um espaço
?>