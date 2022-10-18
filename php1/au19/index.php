<?php
    $frase = "Esta frase tem 29 caracteres.";
    $n = '<br>';

    echo "$frase[5]";
    echo $n;
    #retorna o número de c aracteres da string
    $numero_caracteres_total = strlen($frase);
    echo $numero_caracteres_total;
    echo $n;

    #retorna as letras a partir da posição 0 e durante 4 caracteres
    $primeira_palavra = substr($frase,0,4);
    echo $primeira_palavra;
    echo $n;

    #converte toda a string em letras maiúsculas
    $todas_maiusculas = strtoupper($frase);
    echo $todas_maiusculas;
    echo $n;

    #converte toda a string em letras minúsculas
    $todas_minusculas = strtolower($frase);
    echo $todas_minusculas;
    echo $n;

    #subistituir uma letra por outra
    $nova_frase = str_replace('a','x',$frase);
    echo $nova_frase;
    echo $n;

    #verifica qual é a posição de um caracter dentro da string
    $posicao = strpos($frase,'a');
    echo $posicao;
    echo $n;

    // https://www.php.net/manuel/pt_BR/ref.strings.php

    $nome = "Ana Maria Silva Cardoso";
    $x = str_contains($nome, "Silva"); #true

    $x = str_starts_with($nome, "Ana"); #true
    $x = str_starts_with($nome, "ana"); #false

    $x = str_ends_with($nome, 'oso'); #true
    $x = str_ends_with($nome, ' oso'); #false

?>