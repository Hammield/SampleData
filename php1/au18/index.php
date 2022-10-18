<?php
    $frase_2 ="I'm going to John's party!";
    echo "$frase_2<br>";

    #Os caracteres de escape são usados para escrever caracteres especiais, como é o caso de alguns símbolos que podem entrar em conflito com o código, a \ é o símbolo para definir um caracter de escape

    $frase_1 = 'I\'m going to John\'s Party!';
    echo "$frase_1<br>";

    $frase_3 = "I'm not sure John \"The great\" will win this fight.";
    echo "$frase_3<br>";

    #apenas têm o comportamento desejado no terminal.
    echo "Joçai Ribeiro\n\rTeste<br>";

    #https://www.utf8-chartable.de/

    echo "\u{A9}<br>"; #copyright
    echo "\u{BC}<br>"; #1/4
    echo "\u{AE}<br>"; #registered trademark

    #com html entities
    #https://dev.w3.org/html5/html-author/charref

    echo "&copy;<br>";
    echo "&frac14;<br>";
    echo "&reg;<br>";
?>