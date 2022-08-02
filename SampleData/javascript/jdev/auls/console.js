/*let familia = [5,9,true,'Delta',60,18];
var larg = familia.length
console.log(familia[2])
console.log(larg)*/

function FizzBuzz(num) {
    if (typeof num !== 'number') {
        return 'não é um número'
    } else if (num % 3 == 0 && num % 5 == 0) {
        console.log('FizzBuzz')
    } else if (num % 3 == 0 ){
        console.log('Fizz')
    } else if (num % 5 == 0) {
        console.log('Buzz')
    } else {
        console.log(num)
    }



 }


var valor = 10