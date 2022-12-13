package au68;


import java.util.Scanner;

public class leitura {
    public static void main(String[] args) {
        System.out.println("Digite sua idade: ");
        Scanner input = new Scanner(System.in);
        int idade = input.nextInt();
        System.out.println("Idade: " + idade);
    }
}
