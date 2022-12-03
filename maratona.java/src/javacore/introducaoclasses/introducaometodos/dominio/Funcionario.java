package javacore.introducaoclasses.introducaometodos.dominio;

public class Funcionario {
    public String nome=null;
    public int idade=0;
    public double[] salarios=null;

    public void imprime(){
        System.out.println(this.nome);
        System.out.println(this.idade);
        if(salarios !=null) {
            for (double salario : salarios) {
                System.out.print(salario + " ");
            }
        }
        imprimeMediaSalario();
    }

    public void imprimeMediaSalario(){
        if (salarios == null){
            return;
        }
        double media = 0;

        for (double salario : salarios){
            media += salario;
        }
        media /= salarios.length;

        System.out.println("\nMédia salarial " + media);
    }
}
