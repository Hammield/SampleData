package javacore.introducaoclasses.introducaometodos.dominio;

public class Calculadora {
    public void somarDoisNumeros(){
        System.out.println(10+20);
    }

    public void doisNumerosSomados(int x, int y){
        System.out.println(x + y);
    }

    public double divisaoNumeros(double num1, double num2){
        return num1 / num2;
    }

    public void somaArray(int[] numeros){
        int soma = 0;
        for (int num : numeros) {
            soma += num;
        }
        System.out.println(soma);
    }

    public void somaVarArgs(int... numeros){
        int soma = 0;
        for(int num : numeros){
            soma += num;
        }
        System.out.println(soma);
    }
}
