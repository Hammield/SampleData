package au87.teste;

import au87.dominio.DatabaseLoader;
import au87.dominio.FileLoader;

public class DataLoaderTeste01 {
    public static void main(String[] args) {
        DatabaseLoader databaseLoader = new DatabaseLoader();
        FileLoader fileLoader = new FileLoader();

        fileLoader.load();
        fileLoader.remove();
        databaseLoader.load();
        databaseLoader.remove();

        fileLoader.checkoutPermission();
        databaseLoader.checkoutPermission();
    }
}
