<?php
    /*$carros = array("Fusca","Uno","Gol");
    $carros = ["Fusca","Uno","Gol","Brasília"];

    $quantidade = count($carros);
    $carros[1] = "Ferrari";
    $qtd = count($carros);
    echo("{$carros[1]}<br>Total de carros: ${quantidade}<br>");

    for ($i = 0; $i <$qtd; $i++){
        echo $carros[$i];
        echo "<br>";
    }

    foreach ($carros as $carro){
        echo ("{$carro}<br>");
    }


    $idade = array("Cleverson"=>"50","Teguinha"=>"15","Silva"=>"40");

   foreach ($idade as $chave => $valor){
    echo ("A chave é ${chave} e o valor é ${valor}<br>");
   };
   */

   $carros = array("Cleverson"=>"50","Teguinha"=>"85","Silva"=>"20");

   ksort($carros); //O sort também serve para números, rsort é a versão inversa de sort, para matriz associativa se usa o asort (a ordem é pelo valor e não pela chave, o ksort ordena pela chave e também tem o krsort e arsort que fazem a ordem decrescendente.)

   foreach ($carros as $carro){
    echo $carro. "<br>";
   }
?>
