<?php
    #Operadores Lógicos

    #Os operadores lógicos são frequentemente usados com os operadores de comparação, eles permitem ligar várias comparações avaliando se são verdadeiras ou falsas

    #no PHP a construção correta de instruções condicionais depende destes operadores (instruções condicionais verificam se uma situação é verdadeira(true) ou falsa(false))

    $a=100;
    $b=200;

    $x = ($a < $b) && ($a < 1000); #AND -> true
    $x = ($a > $b) || ($a > 1000); #OR -> false

    $a = false;
    $x = !$a; #not -> true
?>