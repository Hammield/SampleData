#include <stdlib.h>
#include <stdio.h>

int main(){
	float real,dolar;
	
	printf("Digite o valor em reais: ");
	scanf("%f",&real);
	
	dolar = real / 5.3;
	
	printf("Valor em dolar $%.2f",dolar);
	
	return 0;
}
