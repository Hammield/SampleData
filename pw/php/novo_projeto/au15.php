<?php
    /*function EscreverMensagem(){
        echo "Olá.";
    };

    echo (EscreverMensagem());*/

    function soma(int $v1=0,int $v2=0){ //Pelo fato do PHP poder realizar soma com diferentes tipos como string, é interessante deixar explícito o tipo de valor que você quer usar como parâmetro.
        return $v1 + $v2;
    }

    $n1 = 8;
    $n2 = 14;
    $val = soma($n2);
    echo($val);
?>