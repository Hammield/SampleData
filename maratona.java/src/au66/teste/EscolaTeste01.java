package au66.teste;

import au66.dominio.Escola;
import au66.dominio.Professor;

public class EscolaTeste01 {
    public static void main(String[] args) {
        Professor professor1 = new Professor("Teguinha");
        Professor professor2 = new Professor("Mendes");
        Professor professor3 = new Professor("Santana");

        Escola escola = new Escola("Bosta Café");
    }
}
