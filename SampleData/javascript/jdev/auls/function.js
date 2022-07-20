/* Verbo + Substantivo
let corSite = 'azul';
function resetaCor(){
    corSite = 'branco';
};

function insereCor(cor, tonalidade){
    corSite = cor + ' ' + tonalidade;
}

console.log(corSite)
resetaCor()
insereCor('verde','escuro')
console.log(corSite) */


/*Tipos de função


*/ 

function dizNome() {
    console.log("Teguinha Jr.")
}

dizNome();

function MultDois(valor) {
    return valor * 2;
}

//console.log(MultDois(18));

var resul = MultDois(20);

console.log(resul)