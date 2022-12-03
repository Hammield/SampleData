package au30;

public class au30 {
    public static void main(String[] args) {
        //Dado o valor de um carro, descubra em quantas ele pode ser parcelado
        //Condição valorParcela >= 1000
        int precoCarro = 58000;
        int parc = 1;
        int valorParcela = precoCarro / parc;

        while(valorParcela>=1000){
            parc++;
             valorParcela = precoCarro / parc;
        }

        System.out.printf("Um carro que custa R$%d pode ser parcelado até %d vezes de R%%d",precoCarro,parc,valorParcela);

    }
}
