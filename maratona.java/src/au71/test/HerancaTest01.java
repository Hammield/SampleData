package au71.test;

import au71.domain.Endereco;
import au71.domain.Funcionario;
import au71.domain.Pessoa;

public class HerancaTest01 {
    public static void main(String[] args) {
        Endereco endereco = new Endereco();
        endereco.setRua("Rueiro");
        endereco.setCep("88888-000");

        Pessoa pessoa = new Pessoa();
        pessoa.setCpf("111.555.999-00");
        pessoa.setNome("Cleverson Teguinha");
        pessoa.setEndereco(endereco);

        Funcionario funcionario = new Funcionario();
        Endereco endereco1 = new Endereco();
        endereco1.setRua("Blabla");
        endereco1.setCep("fad7");

        funcionario.setNome("Teguinha");
        funcionario.setSalario(8000.00);
        funcionario.setCpf("125845");
        funcionario.setEndereco(endereco1);
        funcionario.imprime();

        funcionario.relatorioPagamento();
    }
}
