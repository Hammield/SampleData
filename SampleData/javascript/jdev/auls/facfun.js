function criaCel(marca,tamanho,cap){
    return {
        marca,
        tamanho,
        cap,
        ligar() {
            console.log("Fazendo ligação")
        }
    }
}

const celular1 = criaCel('Zenfone',8.1,6000);
console.log(celular1);