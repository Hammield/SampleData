package au124;

import java.time.LocalDate;
import java.time.LocalTime;

public class PeriodTest01 {
    public static void main(String[] args) {
        LocalTime time = LocalTime.now();
        LocalDate date = LocalDate.now();
        System.out.println(time);
        System.out.println(date);
    }
}
