package au80.dominio;

public enum TipoCliente {
    PESSOA_FISICA(4,"Pessoa Física"),
    PESSOA_JURIDICA(2,"Pessoa Juridica");

    protected final int valor;
    private String nomeRelatorio;
    TipoCliente(int valor,String nomeRelatorio){
        this.valor = valor;
        this.nomeRelatorio = nomeRelatorio;
    }

    public int getValor(){
        return valor;
    }

    public String getNomeRelatorio() {
        return nomeRelatorio;
    }
}
