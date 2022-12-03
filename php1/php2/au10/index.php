<?php
 /*O PHP contém uma função muito simples de usar para criar strings com um determinado número de repetições concatenadas. */

 $a = str_repeat('-',20); // $a = = '--------------------'

 $b = str_repeat('=|',20); // $b = '=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|'


$valor = 100;
echo str_pad($valor,'30','.',STR_PAD_LEFT);
 /*pad_type:
        STR_PAD_LEFT
        STR_PAD_RIGHT
        STR_PAD_BOTH */

echo "\n";

echo'<pre>';
$valores = [100,2100,0,45790];
foreach($valores as $valor){
    echo str_pad($valor, '30', '.', STR_PAD_LEFT) . PHP_EOL;
}
?>