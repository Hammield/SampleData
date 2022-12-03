package javacore.introducaoclasses.ex;

import javacore.introducaoclasses.dominio.Carro;

public class exe42 {
    public static void main(String[] args) {
        Carro carro1 = new Carro();
        Carro carro2 = new Carro();

        carro1.modelo = "Golf";
        carro1.ano = 2010;
        carro1.nome = "Cleverson";

        carro2.modelo = "Argo";
        carro2.ano = 2016;
        carro2.nome = "Teguinha";

        System.out.println("Modelo: " + carro1.modelo + "\nAno: " + carro1.ano + "\nNome: " + carro1.nome);

        System.out.println("----------------------------------");

        System.out.println("Modelo: " + carro2.modelo + "\nAno: " + carro2.ano + "\nNome: " + carro2.nome);

    }

}
