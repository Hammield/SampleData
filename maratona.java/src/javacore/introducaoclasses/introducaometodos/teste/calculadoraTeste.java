package javacore.introducaoclasses.introducaometodos.teste;

import javacore.introducaoclasses.introducaometodos.dominio.Calculadora;

public class calculadoraTeste {
    public static void main(String[] args) {
        Calculadora calculador = new Calculadora();
        calculador.somarDoisNumeros();

        calculador.doisNumerosSomados(50,18);

        Calculadora div = new Calculadora();
        double res = div.divisaoNumeros(220,24);

        System.out.println(res);
    }
}
