<?php 
 $x = 10;
 $y = 5;

 function teste(){
    global $x, $y, $z;
    $z = $x + $y;
    echo "O valor da soma: $z";
 }
 teste();
 echo "<br>O valor de x fora: $x"
?>