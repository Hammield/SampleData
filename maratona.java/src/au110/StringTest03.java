package au110;

import java.util.Scanner;

public class StringTest03 {
    public static void main(String[] args) {
        long inicio = System.currentTimeMillis();
        concatStringBuilder(10_000);
        long fim = System.currentTimeMillis();
        long total = fim - inicio;
        System.out.println("Tempo de execução em ms: " + total);
    }

    private static void concatString(int tamanho){
        String texto = "";
        for (int i = 0; i < tamanho; i++) {
            texto+=i;
        }
    }

    private static void concatStringBuilder(int tamanho){
        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < tamanho; i++) {
            sb.append(i);
        }
    }
}
