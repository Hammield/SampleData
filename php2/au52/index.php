<?php

$nomes = ['joao','ana','carlos'];
list($nome1,$nome2,$nome3) = $nomes;

echo $nome1 .PHP_EOL;
echo $nome2 .PHP_EOL;
echo $nome3 .PHP_EOL;

list($nome1,,$nome2) = $nomes;
echo $nome1 .PHP_EOL;
echo $nome2 .PHP_EOL;

$funcionarios = [
    'administrador' => 'joao',
    'secretaria' => 'ana',
    'contabilidade' => 'carlos'
];

extract($funcionarios);
echo $administrador . PHP_EOL;
echo $secretaria . PHP_EOL;
echo $contabilidade . PHP_EOL;

?>