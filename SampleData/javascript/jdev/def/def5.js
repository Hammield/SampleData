function conta(val){
    for (let c = 1;c<=val;c++)
    if (c % 2 === 0){
        console.log(`${c} PAR`)
    } else {
        console.log(`${c} IMPAR`)
    }
}