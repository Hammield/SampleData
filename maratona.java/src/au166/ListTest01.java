package au166;

import java.util.ArrayList;
import java.util.List;

public class ListTest01 {
    public static void main(String[] args) {
        List<String> nomes = new ArrayList();
        nomes.add("Cleverson");
        nomes.add("Teguinha");

        for (Object nome : nomes){
            System.out.println(nome);
        }

        System.out.println("aaaaaaaaaaaaaaaaaaaaaaaaa");

        for (int i = 0; i < nomes.size(); i++) {
            System.out.println(nomes.get(i));
        }
    }
}
