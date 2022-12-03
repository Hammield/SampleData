<?php
    $num = 15;
    if($num===7){
        echo "O número $num é igual a 7.";
    }else if($num>=7){
        echo "O número $num é maior que 7.";
    }else{
        echo "O número $num é menor que 7.";
    }


    $x = 1 <=>1;# 0 (1 == 1)
    $x = 3 <=>2;# 1 (3>2)
    $x = 1 <=>2;# -1 (1<2)

    echo "<br>";

    echo $x;

?>