package au57.teste;

import au57.dominio.Pessoa04;

public class PessoaTeste04 {
    public static void main(String[] args) {
        Pessoa04 pessoa04 = new Pessoa04();
        Pessoa04 pessoa05 = new Pessoa04();

        //pessoa04.init("Teguinha",48,'M');
        pessoa04.init("Teguinha",53,'M',4500.00);
        pessoa05.init("Cleverson",28,'F');

        pessoa04.imprime();

        System.out.println("--------------------------");

        System.out.println("Idade: " + pessoa04.getIdade());
        System.out.println("Nome: " + pessoa04.getNome());
        System.out.println("Sexo: " + pessoa04.getSexo());
        System.out.println("Salário: " + pessoa04.getSalario());

        System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-");

        pessoa05.imprime();

        System.out.println("--------------------------");

        System.out.println("Idade: " + pessoa05.getIdade());
        System.out.println("Nome: " + pessoa05.getNome());
        System.out.println("Sexo: " + pessoa05.getSexo());
        System.out.println("Salário: " + pessoa05.getSalario());

    }
}
