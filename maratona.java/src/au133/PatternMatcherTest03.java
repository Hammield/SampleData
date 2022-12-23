package au133;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class PatternMatcherTest03 {
    public static void main(String[] args) {
        //OX[0-9A-F]
        String regex = "0[xX][0-9a-fA-F]";
        String texto2 = "12 0x 0X 0xFFABC 0x109";
        Pattern pattern = Pattern.compile(regex);
        Matcher matcher = pattern.matcher(texto2);
        System.out.println("texto: "+texto2);
        System.out.println("indice: 0123456789");
        System.out.println("regex "+regex);
        System.out.println("Posicoes encontradas");
        while (matcher.find()){
            System.out.println(matcher.start()+" "+matcher.group());
        }
    }
}
