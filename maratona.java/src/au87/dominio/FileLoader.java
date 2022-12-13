package au87.dominio;

public class FileLoader implements DataLoad, DataRemove{
    @Override
    public void load() {
        System.out.println("Dados carregados de um arquivo");
    }

    @Override
    public void remove() {
        System.out.println("Dados removidos de um arquivo");
    }
}
