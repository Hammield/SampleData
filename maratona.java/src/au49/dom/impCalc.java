package au49.dom;

public class impCalc {
    public void imprime(Calc calculadora, int num1, int num2){
        System.out.println(calculadora.somaCalc(num1,num2));
        System.out.println(calculadora.subCalc(num1,num2));
        System.out.println(calculadora.multCalc(num1,num2));
        System.out.println(calculadora.divCalc(num1,num2));
    }
}

