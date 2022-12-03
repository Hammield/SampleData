<?php
    #Concatenação
    #.= faz uma concatenação com o valor já existente na string

    /*
    
    $a = "João". ' '. 'Ribeiro';
    $b = "João";
    $b .= ' '. 'Ribeiro';

    echo $b;
    die(); //Encerra aqui
    
    */

    $cliente = "Cleverson Teguinha";
    $email = "teguinha42@gmail.com.br";

    $texto = <<<LABEL
    Olá, sr. $cliente.
    Serve a presente <br>mensagem<br> para informar que se encontra inscrito no próximo concurso.
    Enviamos o regulamento para o seu email $email
    obrigado pela sua simpatia.
    LABEL;

    echo $texto
;   
?>