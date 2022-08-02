function valores(notas){
    const soma = 0;
    for (let nota of notas) {
        soma += nota
    }
    const media = soma / (notas.length);
    return media
}