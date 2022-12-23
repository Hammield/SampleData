package au117;

import java.text.NumberFormat;
import java.util.Locale;

public class MoedaTest01 {
    public static void main(String[] args) {
        Locale localePT = new Locale("pt","BR");
        Locale localeIT = Locale.ITALY;
        Locale localeJP = Locale.JAPAN;
        NumberFormat[] nfa = new NumberFormat[4];

        nfa[0] = NumberFormat.getCurrencyInstance();
        nfa[1] = NumberFormat.getCurrencyInstance(localePT);
        nfa[2] = NumberFormat.getCurrencyInstance(localeIT);
        nfa[3] = NumberFormat.getCurrencyInstance(localeJP);
        double valor = 10_000.2130;
        for (NumberFormat numberFormat : nfa) {
            System.out.println(numberFormat.format(valor));
        }
    }
}
