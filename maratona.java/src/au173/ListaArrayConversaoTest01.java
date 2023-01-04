package au173;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class ListaArrayConversaoTest01 {
    public static void main(String[] args) {
        List<Integer> numeros = new ArrayList<>();
        numeros.add(4);
        numeros.add(2);
        numeros.add(9);
        Integer[] listToArray = numeros.toArray(new Integer[0]);
        System.out.println(Arrays.toString(listToArray));

        Integer[] numerosArray = new Integer[3];
        numerosArray[0] = 4;
        numerosArray[1] = 2;
        numerosArray[2] = 9;

        List<Integer> arrayToList = Arrays.asList(numerosArray);
        System.out.println(Arrays.toString(numerosArray));
        System.out.println(arrayToList);
    }
}