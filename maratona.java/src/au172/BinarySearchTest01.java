package au172;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class BinarySearchTest01 {
    public static void main(String[] args) {
        List<Integer> numeros = new ArrayList<>();
        numeros.add(3);
        numeros.add(1);
        numeros.add(4);
        numeros.add(2);
        Collections.sort(numeros);
        System.out.println(Collections.binarySearch(numeros,2));
    }
}
