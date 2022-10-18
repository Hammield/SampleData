<?php
    #funções closue são funções anônimas que podem usar variáveis do escopo global

    $x = 20;
    $y = 30;

    $minhaClosure = function($z) use($x, $y){
        echo "$z - $x - $y";
        $y +=1000;#Esta instrução não vai alterar o valor de $y
    }; #Função anônima deve ser encerrada com ;

    $minhaClosure(10);

    echo "<br>";

    echo "$y";

    echo "<br>";

    #Arrow functions são funcões anônimas escritas de uma forma mais suscinta, suportam as mesmas características de uma função CLOSURE, com a diferença que capturam automaticamente as variáveis globais.

    $x = 20;
    $y = 30;

    $minhaFuncao = fn($z) => "$x - $y - $z";

    echo $minhaFuncao(10); #usam a palavra reservada fn e não necessitam do return nem das chaves
?>