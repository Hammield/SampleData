package au87.dominio;

public interface DataLoad {
    void load();

    default void checkoutPermission(){
        System.out.println("Checando permissão.");
    }
}
