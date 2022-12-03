package au54.teste;

import au54.dominio.Pessoa;

public class PessoaTeste {
    public static void main(String[] args) {
        Pessoa pessoa = new Pessoa();
        pessoa.setNome("Teguinha");
        pessoa.setIdade(18);

        //pessoa.imprime();

        System.out.println(pessoa.getNome());

        System.out.println(pessoa.getIdade());
    }
}
