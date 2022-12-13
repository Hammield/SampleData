package au83;

import java.util.Scanner;

public class feito {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Digite seu nome: ");
        String nome = input.nextLine();

        System.out.println("Digite sua idade: ");
        int idade = input.nextInt();

        System.out.printf("Nome: %s\nIdade: %d",nome,idade);
    }
}
