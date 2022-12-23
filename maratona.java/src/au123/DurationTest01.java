package au123;

import java.time.Duration;
import java.time.LocalDateTime;
import java.time.LocalTime;

public class DurationTest01 {
    public static void main(String[] args) {
        LocalDateTime now = LocalDateTime.now();
        LocalDateTime nowAfterTwoYears = LocalDateTime.now().plusYears(2);
        LocalTime timeNow = LocalTime.now();
        LocalTime timeMinus7Hours = LocalTime.now().minusHours(7);

        System.out.println(now);
        System.out.println(nowAfterTwoYears);
        System.out.println(timeNow);
        System.out.println(timeMinus7Hours);
        System.out.println(Duration.between(now,nowAfterTwoYears));
    }
}
