package au168;

import au161.dominio.Smartphone;

import java.util.ArrayList;
import java.util.List;

public class SmartphoneListTest01 {
    public static void main(String[] args) {
        Smartphone s1 = new Smartphone("A1BC1","iPhone");
        Smartphone s2 = new Smartphone("22222","Pixel");
        Smartphone s3 = new Smartphone("33333","Samsung");
        List<Smartphone> smartphones = new ArrayList<>(6);
        smartphones.add(s1);
        smartphones.add(s2);
        smartphones.add(s3);
        for (Smartphone smartphone : smartphones){
            System.out.println(smartphone);
        }

    }
}
