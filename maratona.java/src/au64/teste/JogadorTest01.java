package au64.teste;

import au64.domain.Jogador;

public class JogadorTest01 {
    public static void main(String[] args) {
        Jogador jogador1 = new Jogador("Teguinha");
        Jogador jogador2 = new Jogador("Cleverson");
        Jogador jogador3 = new Jogador("da Silva");

        Jogador[] jogadores = {jogador1,jogador2,jogador3};

        for (Jogador jogadorTodos : jogadores){
            jogadorTodos.imprime();
        }
    }
}
