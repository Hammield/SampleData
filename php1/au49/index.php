<?php
 #Podemos, inclusive, definir uma classe como não sendpo passível de ser herdada colocando FINAL antes de CLASS

 final class Humano{
    //código
    function teste(){
        echo 'teste';
    }
 }

 class Homem extends Humano{
    //codigo
}
?>