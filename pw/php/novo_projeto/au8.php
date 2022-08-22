<?php
    //strlen()
    //echo strlen('aaaaaaaaaaaaaaaaaaaaaaaaaaa');

    //str_word_count()
    $palavra = "Em um dia, tudo será o mesmo que já foi antes, sendo assim o fim é o início.";

    //strrev();
    //echo strrev("Refrigerante de Uva");

    //strpos()
    //echo strpos("$palavra","tudo")

    //str_replace()
    //$palavra2 = "Olá, Mundo";
    //echo str_replace("Mundo","Teguinha",$palavra2);
    //echo($palavra2)

    //$data = "08-08-2022";
    //$data_formatada =  str_replace("-","/",$data);

    //echo("$data_formatada")

    $email = "teguinha@hotmail.com";
    $email_form = str_replace("@","",$email);

    echo("$email_form");
?>