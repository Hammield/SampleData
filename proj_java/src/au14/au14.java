package au14;
/*
* Crie variáveis para os campos descritos abaixo
*  entre <> e imprima a seguinte mensagem:
*
* Eu <nome>, morando no endereço <endereço>,
* confirmo que recebi o salário de <salario>, na data <data>
*
* */
public class au14 {

    public static void main(String[] args) {
        String nome = "Teguinha";
        String endereco = "Casa 8 Bairro Teste";
        double salario = 4500.18;
        String data = "23/12/2008";

        System.out.println("Eu "+nome+ " morando no endereço "
        + endereco + "\n confirmo que recebi o salário de R$"
        + salario + ", na data " + data +".");
    }

}
