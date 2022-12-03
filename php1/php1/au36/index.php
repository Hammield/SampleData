<?php
    #uma função nunca pode ser chamada sem que os valores obrigatórios sejam fornecidos

    #Contudo, embora pouco frequente, podemos passar mais argumentos do que o solicitado

    function outraFuncao($a){
        $x = func_get_arg(0);
        $y = func_get_arg(1);
        $z = func_get_arg(2);

        echo "$x - $y - $z";

        echo '<br>';

        echo func_num_args();#Avalia quantos argumentos foram passados para a função
    }

    outraFuncao(20,50,40);

    echo "<br>";

    #Também não muito comum, mas sendo possível, podemos usar um argumento especial designado por variadic parameter
    function minha_funcao(...$argumentos){
        foreach($argumentos as $v){
            echo "$v<br>";
        }
    }

    minha_funcao(20,30,40,50,60);
?>