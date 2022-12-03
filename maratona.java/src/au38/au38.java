package au38;

public class au38 {
    public static void main(String[] args) {
        int[][] arrayInt = {{5,9},{4,2,9,4},{3,8,4,1,2,9,5}};

        for (int[] baseArr:arrayInt) {
            System.out.println("\n--------------");
            for (int num: baseArr) {
                System.out.println(num + " ");
            }
        }
    }
}
