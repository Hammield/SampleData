<?php
    #Classes 

    /*
    Uma classe é um molde/forma/modelo a partir do qual criamos objetos.
    exemplo: a classe Humano é um modelo para, a partir dela, criarmos um conjuto de homens e mulheres, cada um partilhando o mesmo "molde" mas com propriedades e funções vom valores diferentes.
    Homem e mulher têm ambos cabelo, mas o homem pode ter cabelo escuro e a mulher cabelo claro


    #Teoricamente:
    class humano
    >cabelo
    >genero
    >peso
    >caminhar

    Homem -> Humano
    > cabelo - castanho
    > genero - masculino
    > peso - 75
    >caminhar()

    Mulher -> Humano
    >cabelo - claro
    >genero - feminino
    >peso - 63
    >caminhar()
    >cantar() - pode ter funções adicionais
    */


    class FiguraGeometrica{
        public $largura, $altura;
        public $x;
        public $y;

        function novaArea($a,$b){
            return $a * $b;
        }
    }

?>