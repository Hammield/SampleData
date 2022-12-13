package au60.dominio;

public class FuncionarioFinal {
    private String nome;
    private int idade;
    private double salario;
    private double altura;

    public FuncionarioFinal(String nome, int idade, double salario, double altura){
        this.nome = nome;
        this.idade = idade;
        this.salario = salario;
        this.altura = altura;
    }

    public void init(String nome, int idade, double salario, double altura){
        this.nome = nome;
        this.idade = idade;
        this.salario = salario;
        this.altura = altura;
    }

    public void init(){
        this.init(nome,idade,salario,altura);
    }

    public FuncionarioFinal(){

    }



    public void imprime(){
        System.out.println("Nome: " + this.nome);
        System.out.println("Idade: " + this.idade);
        System.out.println("Salário: " + this.salario);
        System.out.println("Altura: " + this.altura);
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public int getIdade() {
        return idade;
    }

    public void setNome(String nome){
        this.nome = nome;
    }

    public String getNome(){
        return nome;
    }

    public void setAltura(double altura){
        this.altura = altura;
    }

    public double getAltura(){
        return altura;
    }

    public void setSalario(double salario){
        this.salario = salario;
    }

    public double getSalario(){
        return salario;
    }
}
