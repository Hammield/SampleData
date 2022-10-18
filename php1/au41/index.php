<?php
    #Generator

    #Um gerador é uma função que permite gerar séries de valores, cada valor é devolvido pela função através da instrução yield
    #Ao contrário do return, a instrução yield guarda o estado da função permitindo que a função continue a partir do estado onde ficou na última chamada

    function buscarNumero(){
        for($i=0;$i<10;$i++){
            yield $i;
        }
    }

    #A função geradora funciona como um iterador, podendo ser usada num ciclo até que o gerador não tenha mais  valores para devolver com o yield
    foreach(buscarNumero() as $numero){
        echo "$numero<br>";
    }

?>