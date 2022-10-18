<?php
    /*
    Existem duas funções especiais dentro dos loops: break e continue

    break: serve para interromper a execução de um loop

    continue: permite avançar uma volta do ciclo ignorando o código que deveria ser executado

    goto: é muito pouco usado porque torna a leitura de código muito mais complexa, definida por um label (nome seguido de :)
    
    */

    for($i=0;$i <20;$i++){
        if($i==10){
            goto teste;
        }
        echo "$i<br>";
    }
    echo "Fim.";

    teste:
    echo "Aqui!";
?>