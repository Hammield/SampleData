package au69;

import java.util.Scanner;

public class leitura2 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Digite seu nome: ");
        String nome = input.nextLine();

        System.out.println("Digite sua idade: ");
        int idade = input.nextInt();

        System.out.println("Digite seu sexo: (M = Masculino/F = Feminino)");
        char sexo = input.next().charAt(0);

        System.out.println("Nome: " + nome);

        System.out.printf("Idade: %d \nSexo: %c \n", idade,sexo);
    }
}
