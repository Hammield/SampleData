<?php
    $valor = 'Joao';
    //$valor = [1,2,3];

    if(is_array($valor)){
        echo 'É um array';
    }else{
        echo 'Não é um array';
    }

    echo PHP_EOL;

    $valor = null;
    $nome = '';
    $valores = [1,2,3];
    echo (int)empty($valor);
    echo PHP_EOL;
?>