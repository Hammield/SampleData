<?
#O PHP 8 introduz uma novidade: named arguments.
#se olharmos um exemplo até agora:
function adicionar($a,$b=10,$c=30){
    echo $a + $b + $c;
}

#no PHP 7, se quisermos alterar o valor de $c e manter o valor de $b, temos que fornecer todos os valores
adicionar(10,10,300);

 echo "<br>";

#NO PHP 8 podemos fazer da seguinte forma:
adicionar(c: 1000, a:0);

echo "<br>";

?>