package javacore.introducaoclasses.introducaometodos.teste;

import javacore.introducaoclasses.introducaometodos.dominio.Calculadora;

public class calcTeste {
    public static void main(String[] args) {
        Calculadora calc = new Calculadora();
        int[] nums = new int[]{5,9,2,1,4,12,5,8,4};
        calc.somaArray(nums);

        calc.somaVarArgs(9,56,4,1,4,23,45,2);
    }
}
