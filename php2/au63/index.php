<?php
if(!isset($_COOKIE['visitou_o_site'])){
    setcookie('visitou_o_site',true,time() + 3600);
    echo 'É a primeira visita ao site. Bem-vindo!';
}else{
    echo 'Você já esteve neste site na última hora. Seja bem-vindo novamente.';
}
?>