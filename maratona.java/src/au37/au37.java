package au37;

public class au37 {
    public static void main(String[] args) {
        int[][] dias = new int[3][3];

        dias[0][0] = 16;
        dias[0][1] = 12;
        dias[0][2] = 29;

        dias[1][0] = 3;
        dias[1][1] = 1;
        dias[1][2] = 22;

        dias[2][0] = 20;
        dias[2][1] = 4;
        dias[2][2] = 18;

        for (int[] baseArr:dias) {
            for (int num:baseArr) {
                System.out.println(num);
            }
        }
    }
}
