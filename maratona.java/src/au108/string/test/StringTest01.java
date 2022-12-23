package au108.string.test;

public class StringTest01 {
    public static void main(String[] args) {
        String nome = "Cleverson";//String constant pool
        String nome2 = "Cleverson";
        nome = nome.concat(" Teguinha");
        System.out.println(nome);
        System.out.println(nome.equals(nome2));
    }
}
