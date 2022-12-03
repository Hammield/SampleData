<?php
    /*
    Access Levels

    Existem 3 tipos de níveis de acesso a elementos dentro de uma class.
    public, protected e private
    */

    class MinhaClasse
    {
        public $v1;
        protected $v2;
        private $v3;
    }

    $a = new MinhaClasse();
    $a->v1 = '111'; #possível
    $a->v2 = '222'; # não é possível
    $a->v3 = '333'; #não é possível


    /*
    PUBLIC: os membros públicos (propriedades ou métodos) de uma classe, estão sempre acessíveis. Se criarmos um objeto a partir da classe, temos um acesso direto a esses elementos.
    
    */

    class TudoPublico
    {
        public $propriedade;

        public function metodo(){
            echo "Método Público";
        }
    }

    $obj1 = new TudoPublico();
    $obj1 -> $propriedade = "oi";

    /*
    Protected: um elemento protected pode ser alcançado dentro da classe e dentro de uma qualquer classe que seja uma extensão de outra classe
    
    */

    class ClasseTeste
    {
        public $publica = "a";
        protected $protegida = "b";
        private $privada = "c";
    }

    class ClasseDerivada extends ClasseTeste
    {
        function teste()
        {
            echo $this->publica; #possível
            echo $this->protegida; #possível
            echo $this->privada; #erro
        }
    }

    $a = new ClasseTeste();
    $a->publica = "1"; #possível
    $a->protegida = "2"; #gera erro
    $a->privada = "3"; #gera erro
    
    $b = new ClasseDerivada();
    $b->publica = "a"; #possível
    $b->protegida = "b"; #gera erro
    $b->privada = "c"; #gera erro

    /*
    PRIVATE: só pode ser visível dentro da própria classe.
    Não é visível nos objetos instanciados nem noturas classes herdadas.

    -------------------
    Ao contrário das propriedades, os métodos não necessitam de ter um nível de acesso especificado claramente. Se não for identificado, por defeito o método é público
    
    */

    class teste
    {
        private $valor;

        function mover()
        {
            //codigo
        }
    }


    $a = new Teste();
    $a->mover(); #possivel
    $a->valor #erro

?>