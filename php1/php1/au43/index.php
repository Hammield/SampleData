<?php
    #Para aceder ás propriedades de uma classe, dentro dos métodos da classe, é usada a pseudo variável $this seguida do operador seta ->

    class Humano{
        public $nome = "João";
        public $apelido = "Ribeiro";

        public function nomeCompleto()
        {
            return $this->nome. ' '. $this->apelido;
        }

    }
    
        #Um objeto é uma variável cirada a partir de uma classe, instanciar um objeto significa criar um objeto a partir de uma classe atribuindo á variável a expressão new e o nome da classe



    $homem = new Humano();

    echo $homem->nomeCompleto();

?>