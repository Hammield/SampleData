<?php
    #Normalmente uma variável de PHP passa a existir a partir do local onde é iniciada e existe até ao final da página, no entanto, quando temos variáveis dentro de uma função, elas têm um ciclo de vida limitado

    $a=10;

    function funcao(){
        global $a;
        $a=20;
    }
?>