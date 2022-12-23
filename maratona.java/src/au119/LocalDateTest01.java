package au119;

import java.time.LocalDate;
import java.time.Month;
import java.time.temporal.ChronoField;
import java.util.Calendar;
import java.util.Date;

public class LocalDateTest01 {
    public static void main(String[] args) {
        System.out.println(new Date());
        System.out.println(Calendar.getInstance());
        System.out.println(Month.JANUARY.getValue());
        LocalDate date = LocalDate.of(2022,Month.DECEMBER, 21);
        System.out.println(date.getMonth());
        System.out.println(date.get(ChronoField.DAY_OF_WEEK));
    }
}
