<?php
    /*

    class Humano1{
        public $nome = "João";
        public $apelido = "Ribeiro";

        public function nomeCompleto(){
            return "$this->nome $this->apelido";
        }
    }

    $homem = new Humano1();
    echo $homem->nomeCompleto();

    */

    /*
    Constructor

    O constructor é um método especial dentro de uma classe que é sempre executado automaticamente quando é criado um objeto a partir de uma classe. Este método é definido de uma forma especial com __ (dois underscores). São chamados métodos mágicos porque têm uma execução específica ou automática associada
    */

use Humano as GlobalHumano;

    class Humano{
        private $nome;
        private $apelido;

        function __construct($n,$a)
        {
         $this->nome = $n;
         $this->apelido = $a;   
        }

        public function nomeCompleto(){
            return "$this->nome $this->apelido";
        }
    }

    $homem = new GlobalHumano("Cleverson","Teguinha");

    echo $homem->nomeCompleto();
?>