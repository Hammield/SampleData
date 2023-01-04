<?php
    $nomes = [
        'joao','ana','carlos' 
    ];

    $final = array_map("saudacao",$nomes);
    print_r($nomes);

    function saudacao($valor)
    {
        return "Olá, $valor.";
    }
?>