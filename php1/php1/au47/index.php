<?php
    /*
    A herança é o mecanismo através do qual podemos criar classes que herdam propriedades e métodos de outra classe.

    a classe inicial a partir da qual outras vão ser criadas, é designada por classe base

    todas as c lasses que vão herdar propriedades e métodos da classe base são designadas por classes derivadas

    Exemplo (uma classe tradicional):
    
    */

    class Animal{
        public $especie;
        public $peso;

        function tipoEspecie(){
            return "Este animal é da especie {$this->especie}";
        }
    }

    $animal = new Animal;
    $animal->especie = "Mamífero";

    echo $animal->tipoEspecie();

    /*Exemplo de uma classe com herança*/
    class Mamifero extends Animal{
        //não é necessário voltar a definir as propriedades e métodos que já existem na classe base

        //podemos acrescentar outras propriedades e outros métodos
        public $quantidadePernas;
        public $temPelo;

        function temQuantasPernas(){
            return "<hr>O animal da espécie {$this->especie} tem {$this->quantidadePernas} pernas";
        }
    }

    $Mamifero = new Mamifero;

    $Mamifero->quantidadePernas=4;
    $Mamifero->especie="Mamífero";

    echo $Mamifero->temQuantasPernas();
?>