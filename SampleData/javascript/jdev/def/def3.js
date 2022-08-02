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