function mult(val) {
    soma = 0
    for (let c =1 ;c<= val;c++){
        if (c % 3 === 0 || c % 5 === 0) {
            soma += c
        }
    }
    return soma
}
