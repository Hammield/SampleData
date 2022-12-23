package au109;

public class StringTest02 {
    public static void main(String[] args) {
        String nome = "Teguinha";
        String numeros = "012345";

        System.out.println(nome.charAt(1));
        System.out.println(nome.length());
        System.out.println(nome.replace("a","o"));
        System.out.println(nome.toLowerCase());
        System.out.println(nome.toUpperCase());
        System.out.println(numeros.length());
        System.out.println(numeros.substring(0,3));
    }
}
