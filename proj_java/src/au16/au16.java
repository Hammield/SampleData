package au16;

public class au16{
    public static void main(String[] args) {
        int num = 12;
        int opc = 37;

        boolean isMaior = 7 > 10;

        System.out.println(isMaior);

        System.out.println(41%2);

        if (num==opc){
            System.out.printf("O número %d é igual a %d.",num,opc);
        }else if (num>opc){
            System.out.printf("O número %d é maior que %d.",num,opc);
        }else{
            System.out.printf("O número %d é menor que %d.",num,opc);
        }

    }
}
