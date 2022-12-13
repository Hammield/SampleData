package au80.teste;

import au80.dominio.Cliente;
import au80.dominio.TipoCliente;
import au80.dominio.TipoPagamento;

public class ClienteTeste01 {
    public static void main(String[] args) {
        Cliente cliente = new Cliente("Teguinha", TipoCliente.PESSOA_JURIDICA);
        Cliente cliente2 = new Cliente("Cleverson", TipoCliente.PESSOA_FISICA);

        System.out.println(cliente);
        System.out.println(cliente2);

        System.out.println(TipoPagamento.CREDITO.calcularDesconto(500));
    }
}
