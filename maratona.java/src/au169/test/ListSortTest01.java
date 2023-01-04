package au169.test;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class ListSortTest01 {
    public static void main(String[] args) {
        List<String> mangas = new ArrayList<>(6);
        mangas.add("Manga Rosa");
        mangas.add("Manga Verde");
        mangas.add("Manga Espada");
        mangas.add("Manga Palmer");
        mangas.add("Manga Ubá");
        mangas.add("Manga Tommy Atkins");
        Collections.sort(mangas);
        for (String manga : mangas){
            System.out.println(manga);
        }
    }
}
