package javacore.introducaoclasses.test;

import javacore.introducaoclasses.dominio.Pessoa;

public class PessoaTest01 {
    public static void main(String[] args) {
        Pessoa estudante = new Pessoa();
        estudante.idade = 18;
        System.out.println(estudante.idade);
    }
}
