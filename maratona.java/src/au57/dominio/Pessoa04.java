package au57.dominio;

public class Pessoa04 {
    private String nome;
    private int idade;
    private char sexo;
    private double salario;

    public void init(String nome, int idade, char sexo){
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
    }

    public void init(String nome, int idade, char sexo, double salario){
        this.init(nome,idade,sexo);
        this.salario = salario;
    }

    public void imprime(){
        System.out.println(this.idade);
        System.out.println(this.nome);
        System.out.println(this.sexo);
        System.out.println(this.salario);
    }

    public String getNome() {
        return this.nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getIdade() {
        return this.idade;
    }

    public void setIdade(int idade) {
        if(idade < 0){
            System.out.println("Idade inválida.");
        }
        this.idade = idade;
    }

    public void setSexo(char sexo){
        this.sexo = sexo;
    }

    public char getSexo(){
        return this.sexo;
    }

    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }
}
