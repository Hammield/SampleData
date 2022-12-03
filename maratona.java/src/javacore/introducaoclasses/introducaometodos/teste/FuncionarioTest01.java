package javacore.introducaoclasses.introducaometodos.teste;

import javacore.introducaoclasses.introducaometodos.dominio.Funcionario;

public class FuncionarioTest01 {
    public static void main(String[] args) {
        Funcionario funcionario = new Funcionario();
        funcionario.nome = "Teguinha";
        funcionario.idade = 25;
        funcionario.salarios = new double[]{1200,987.32,2000};

        funcionario.imprime();
    }

}
