package au169.test;

import au169.dominio.Manga;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

class MangaByIdComparator implements Comparator<Manga>{

    @Override
    public int compare(Manga o1, Manga o2) {
        return o1.getId().compareTo(o2.getId());
    }
}

public class MangaSortTest01 {
    public static void main(String[] args) {
        List<Manga> mangas = new ArrayList<>(6);
        mangas.add(new Manga(8L,"Manga Rosa",12.40));
        mangas.add(new Manga(1L,"Manga Verde",8.99));
        mangas.add(new Manga(7L,"Manga Espada",20.00));
        mangas.add(new Manga(4L,"Manga Palmer",14.50));
        mangas.add(new Manga(2L,"Manga Ubá",9.45));
        mangas.add(new Manga(9L,"Manga Tommy Atkins",25.90));

        Collections.sort(mangas);

        for(Manga manga : mangas){
            System.out.println(manga);
        }

        System.out.println("----------------");

        Collections.sort(mangas, new MangaByIdComparator());
        for (Manga manga : mangas){
            System.out.println(manga);
        }
    }
}
