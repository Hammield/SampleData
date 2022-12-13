package au87.dominio;

public class DatabaseLoader implements DataLoad,DataRemove{
    @Override
    public void load() {
    System.out.println("Carregando dados do banco de dados");
    }

    @Override
    public void remove() {
        System.out.println("Removendo dados do banco de dados");
    }
}
