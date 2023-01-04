<?php
    $empresa = [
        'adminsitrador' => 'joao',
        'secretaria' => 'ana',
        'contabilidade' => 'carlos',
        'operario' => 'teguinha'
    ];

    if(key_exists('operario',$empresa)){
        echo 'Existe';
    }else{
        echo "Não existe";
    }
?>