package au56.teste;

import au56.dominio.Pessoa03;

public class PessoaTeste03 {
    public static void main(String[] args) {
        Pessoa03 pessoa03 = new Pessoa03();

        pessoa03.setNome("Cleverson Teguinha");
        pessoa03.setIdade(20);

        pessoa03.imprime();

        System.out.println("------------------------------");

        System.out.println(pessoa03.getIdade());
        System.out.println(pessoa03.getNome());
    }
}
