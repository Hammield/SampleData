<?php
    $valores = [1,2,3,4,5,6,7,8,9,10];

    $final = array_filter($valores,"impares");
    print_r($final);

    function impares($valor)
    {
        return $valor % 2 != 0;
    }

    function pares($valor)
    {
        return $valor % 2 == 0;
    }

    function multiple_cinco($valor)
    {
        return $valor % 5 == 0;
    }
?>