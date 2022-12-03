<?php
    #uma função anônima não tem nome e pode ser definida como o valor "a" atribuir a uma variável

    $a = function(){
        echo "teste";
    };

    $a();


    $falar = function($mensagem){
        echo "<br>Eu disse que: $mensagem <br>";
    };

    $falar("Cleverson Teguinha da Silva");

    #as funções anônimas são particularmente úteis quando as queremos passar como argumentos para uma função

    $b = function(){
        return "Função ativada";
    };

    function falar($x){
        echo $x;
    }

    falar($b);
?>