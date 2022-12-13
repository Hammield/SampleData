package au84.teste;

import au84.dominio.Desenvolvedor;
import au84.dominio.Funcionario;
import au84.dominio.Gerente;

public class Teste {
    public static void main(String[] args) {
        Gerente gerente = new Gerente("Bruno",12000);
        Desenvolvedor desenvolvedor = new Desenvolvedor("Palerma",1600);

        System.out.println(gerente);

        System.out.println(desenvolvedor);
    }
}
