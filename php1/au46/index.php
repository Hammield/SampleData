<?php
    /*
    Classes anônimas

    Este tipo de classe só faz sentido quando queremos instanciar apenas um objeto dessa classe.
    */

    class Objeto1{
        function teste(){
            echo 'teste - normal';
        }
    }

    $a = new Objeto1();


    #Exemplo com classes anônimas

    $b = new class{
        function teste(){
            echo 'teste - classe anônima';
        }
    }; #NOTA: é importante notar que tem que fechar o código com

    $a->teste();
    echo "<br>"; #Lembre-se de realizar a chamada corretamente
    $b->teste();
?>