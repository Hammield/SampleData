package au113;

import java.util.Calendar;
import java.util.Date;

public class DateTest02 {
    public static void main(String[] args) {
        Calendar c = Calendar.getInstance();
        Date date = c.getTime();

        if(c.getFirstDayOfWeek() == Calendar.SUNDAY){
            System.out.println("Domingo é o primeiro dia da semana");
        }

        System.out.println(c.get(Calendar.DAY_OF_YEAR));

        System.out.println(date);
    }
}
