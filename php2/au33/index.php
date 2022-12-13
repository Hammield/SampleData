<?php
$ficheiro = fopen('dados.txt','a');
for($i = 1;$i<=10;$i++){
    fwrite($ficheiro, "Esta linha contém o valor ". rand(0,100) . PHP_EOL);
}
fclose($ficheiro);
?>