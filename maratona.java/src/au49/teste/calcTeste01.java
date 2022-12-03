package au49.teste;

import au49.dom.Calc;
import au49.dom.impCalc;

public class calcTeste01 {
    public static void main(String[] args) {
        Calc calc1 = new Calc();
        impCalc exibe = new impCalc();

        exibe.imprime(calc1,284,6);
        //int res = calc1.somaCalc(5,9);

        //System.out.println(res);
    }
}
