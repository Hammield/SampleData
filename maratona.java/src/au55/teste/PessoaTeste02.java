package au55.teste;

import au55.dominio.Pessoa02;

public class PessoaTeste02 {
    public static void main(String[] args) {
        Pessoa02 pessoa02 = new Pessoa02();

        pessoa02.setIdade(18);
        pessoa02.setNome("Cleverson");

        pessoa02.imprime();

        System.out.println("------------------------------------");

        System.out.println(pessoa02.getIdade());
        System.out.println(pessoa02.getNome());
    }
}
