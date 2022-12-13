<?php
    /*NUMBER_FORMAT: Apresenta um número formatado de várias formas.
    
    A assinatura desta função é constituída por 4 parâmetros.
    $num    -o valor que pretendemos formatar.
    $decimals   -o número de casas decimais a apresentar.
    $dec_point  -o caracter que vai ser apresentado para separar a parte inteira da parte decimal
    $thousands_sep - o caracter que irá ser apresentado na separação do número em milhares.

    */

    $valor = 100;
    //echo number_format($valor, 0, null, null); //vai usar os valores por defeito
    //100

    echo number_format($valor, 2, ',',null);
?>