package au94.test;

import au94.repositorio.Repositorio;
import au94.servico.RepositorioArquivo;
import au94.servico.RepositorioBancoDeDados;

public class RepositorioTeste {
    public static void main(String[] args) {
        Repositorio repositorio = new RepositorioArquivo();
        repositorio.salvar();
    }
}
