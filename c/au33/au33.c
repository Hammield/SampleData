#include <stdlib.h>
#include <stdio.h>

int main(){
	
	int a,b;
	
	printf("Digite um valor (1): ");
	scanf("%d",&a);
	
	printf("Digite outro valor (2): ");
	scanf("%d",&b);
	
	a = a + b;
	b = a - b;
	a = a - b;
	
	printf("Valor 1: %d \nValor 2: %d \n",a,b);
	
	return 0;
}
