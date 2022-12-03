<?php
    //Foreach é um ciclo especialmente concebido para fazer uma iteração pelos valores de um array

    $nomes = ['cleverson','joao','ana','diego','carlos'];
    foreach($nomes as $nome){
        echo "$nome <br>";
    }
    echo "<hr>";

    #existe ainda uma otura assinatura que permite ir buscar a chave e o valor do array
    $capitais = [
        'Portugal' => 'Lisboa',
        'Brasil' => 'Brasília',
        'Espanha' => 'Madrid'
    ];
    foreach($capitais as $key => $value){
        echo "Para o país $key a capital é $value<br>";
    }
?>