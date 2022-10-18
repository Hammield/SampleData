<?php
    /*
    VAR Keyword

    tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade devido ao código escrito antes do PHP 5. Não é recomendável usar porque poderá em breve passar a ser não suportado
    
    */

use Homem as GlobalHomem;
use Humano as GlobalHumano;

    class Homem
    {
        var $nome, $apelido;
    }

    $eu = new GlobalHomem('Cleverson',"Teguinha");
    $eu->nome = 'Cleverson';
    $eu->apelido = 'Teguinha';

    /*
    Object Acess

    No PHP, um objeto instanciado a partir de uma clase pode aceder a elementos privados e protegidos de outro objeto criado a partir da mesma classe. Este comportamento não acontece na maior parte das linguagens de programação
    
    */

    class Humano
    {
        private $nome = 'x';

        function setPrivate($objeto, $valor){
            $objeto->nome = $valor;
        }

        function apresentar(){
            echo $this->nome;
        }
    }

    $a = new GlobalHumano('andre','brando');
    $b = new GlobalHumano('ana','bruna');
    $a->setPrivate($b,'João');

    $a->apresentar();
    echo '<br>';
    $b->apresentar();

?>