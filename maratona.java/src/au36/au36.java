package au36;

public class au36 {
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

        for (int i = 0; i < dias.length; i++) {
            System.out.println("\n");
            for (int j = 0; j < dias[0].length; j++) {
                System.out.println(dias[i][j]);
            }
        }

    }
}
