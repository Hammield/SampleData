package au179.test;

import au169.dominio.Manga;
import au179.dominio.Consumidor;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class MapTest03 {
    public static void main(String[] args) {
        Consumidor consumidor1 = new Consumidor("Teguinha");
        Consumidor consumidor2 = new Consumidor("Cleverson");

        Manga manga1 = new Manga(5L, "Tommy Aktins", 20.50);
        Manga manga2 = new Manga(2L, "Verde", 13.00);
        Manga manga3 = new Manga(9L, "Rosa", 15.55);
        Manga manga4 = new Manga(1L, "Ubá", 9.80);
        Manga manga5 = new Manga(4L, "Aktins", 12.20);
        Manga manga6 = new Manga(3L, "Tommy", 14.99);

        List<Manga> mangaConsumidor1List = List.of(manga1,manga2,manga3);
        List<Manga> mangaConsumidor2List = List.of(manga4,manga5);
        Map<Consumidor, List<Manga>> consumidorMangaMap = new HashMap<>();
        consumidorMangaMap.put(consumidor1,mangaConsumidor1List);
        consumidorMangaMap.put(consumidor2,mangaConsumidor2List);

        for (Map.Entry<Consumidor, List<Manga>> entry : consumidorMangaMap.entrySet()){
            System.out.println(entry.getKey().getNome());
            for (Manga manga : entry.getValue()){
                System.out.println(manga.getNome());
            }
            System.out.println("*-*-*-*-*-*-*-*-*");
        }
    }
}
