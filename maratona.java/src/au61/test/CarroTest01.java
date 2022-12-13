package au61.test;

import au61.domain.Carro;

public class CarroTest01 {
    public static void main(String[] args) {
        Carro c1 = new Carro("Teguinha",300);
        Carro c2 = new Carro("Audi", 800);
        Carro c3 = new Carro("Trator",2000);

        Carro.setVelocidadeLimite(320);

        c1.imprime();
        c2.imprime();
        c3.imprime();
    }
}
