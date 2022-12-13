package au60.teste;

import au60.dominio.FuncionarioFinal;

public class testeFinal {
    public static void main(String[] args) {
        FuncionarioFinal funcionarioFinal1 = new FuncionarioFinal("João Ferreira Henrique",44,3500.00,1.80);
        FuncionarioFinal funcionarioFinal2 = new FuncionarioFinal();

        funcionarioFinal1.imprime();

        System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-");

        System.out.println(funcionarioFinal1.getAltura());
        System.out.println(funcionarioFinal1.getIdade());
        System.out.println(funcionarioFinal1.getNome());
        System.out.println(funcionarioFinal1.getSalario());

        System.out.println("----------------------------------------------------------------");


        funcionarioFinal2.setAltura(1.72);
        funcionarioFinal2.setIdade(20);
        funcionarioFinal2.setNome("Ernesto Borges Nunes");
        funcionarioFinal2.setSalario(2200.00);

        funcionarioFinal2.imprime();

        System.out.println("*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-");

        System.out.println(funcionarioFinal2.getAltura());
        System.out.println(funcionarioFinal2.getIdade());
        System.out.println(funcionarioFinal2.getNome());
        System.out.println(funcionarioFinal2.getSalario());

        System.out.println("----------------------------------------------------------------");
    }
}
