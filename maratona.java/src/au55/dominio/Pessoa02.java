package au55.dominio;

public class Pessoa02 {
    private String nome;
    private int idade;

    public void imprime(){
        System.out.println(this.nome);
        System.out.println(this.idade);
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setIdade(int idade) {
        if (idade < 0){
            System.out.println("Idade inválida.");
        }
        this.idade = idade;
    }

    public int getIdade() {
        return this.idade;
    }

    public String getNome(){
        return this.nome;
    }

}
