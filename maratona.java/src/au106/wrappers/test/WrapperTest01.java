package au106.wrappers.test;

public class WrapperTest01 {
    public static void main(String[] args) {
        Byte byteW = 1;
        Short shortW = 1;
        Integer intW = 1; //autoboxing
        Long longW = 10L;
        Float floatW = 10F;
        Character charW = 'A';
        Boolean boolW = true;

        int i = intW; //unboxing
        Integer intW2 = Integer.parseInt("1");
        boolean verdadeiro = Boolean.parseBoolean("true");


        System.out.println(Character.toLowerCase(charW));
    }
}
