package au179.test;

import au169.dominio.Manga;
import au179.dominio.Consumidor;

import java.util.HashMap;
import java.util.Map;

public class MapTest02 {
    public static void main(String[] args) {
        Consumidor consumidor1 = new Consumidor("Teguinha");
        Consumidor consumidor2 = new Consumidor("Cleverson");

        Manga manga1 = new Manga(5L, "Tommy Aktins", 20.50);
        Manga manga2 = new Manga(2L, "Verde", 13.00);
        Manga manga3 = new Manga(9L, "Rosa", 15.55);
        Manga manga4 = new Manga(1L, "Ubá", 9.80);
        Manga manga5 = new Manga(4L, "Aktins", 12.20);
        Manga manga6 = new Manga(3L, "Tommy", 14.99);

        Map<Consumidor, Manga> consumidorManga = new HashMap<>();
        consumidorManga.put(consumidor1,manga1);
        consumidorManga.put(consumidor2,manga4);
        for (Map.Entry<Consumidor, Manga>entry : consumidorManga.entrySet()){
            System.out.println(entry.getKey() + "-" + entry.getValue());
        }
    }
}
