<?php
    
   $ex = 'Dinamarca';
   
   echo "País: $ex<br>";
   
   //var_dump(3.5);
   $carros = array("Fusca",2021,"Chevette",5,9,2);
    var_dump($carros);

    //objeto
    class carro{
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;

        }
        public function mensagem(){
            return "O $this->$modelo é $this->$cor";
        }
    }

    $carro1 = new carro("Vermelho","Fusca");
    echo $carro1->cor;
?>