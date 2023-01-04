package au169.test;

import au169.dominio.Manga;

import java.util.HashSet;
import java.util.Set;

public class SetTest01 {
    public static void main(String[] args) {
        Set<Manga> mangas = new HashSet<>();
        mangas.add(new Manga(8L,"Manga Rosa",12.40,1));
        mangas.add(new Manga(1L,"Manga Verde",8.99,0));
        mangas.add(new Manga(7L,"Manga Espada",20.00,0));
        mangas.add(new Manga(4L,"Manga Palmer",14.50,9));
        mangas.add(new Manga(2L,"Manga Ubá",9.45,2));
        mangas.add(new Manga(9L,"Manga Tommy Atkins",25.90,4));
    }
}
