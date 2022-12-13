package au90.test;

import au90.dominio.Computador;
import au90.dominio.Televisao;
import au90.dominio.Tomate;
import au90.servico.CalculadoraImposto;

public class ProdutoTeste01 {
    public static void main(String[] args) {
        Computador computador = new Computador("Teguinha",5000);
        Tomate tomate = new Tomate("Tomate",10);
        Televisao tv = new Televisao("Samsung 50\"",2000);

       CalculadoraImposto.calcularImposto(computador);

        System.out.println("---------------------");

        CalculadoraImposto.calcularImposto(tomate);

        System.out.println("---------------------");

        CalculadoraImposto.calcularImposto(tv);

        tomate.setDataValidade("11/12/2022");
    }
}
