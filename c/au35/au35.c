#include <stdlib.h>
#include <stdio.h>

int main(){
	int dias;
	double gastoDia = 45.00;
	double impostoRenda;
	
	printf("Numero de dias trabalhados pelo encanador: ");
	scanf("%d",&dias);
	
	double precoFinal = dias * gastoDia;
	impostoRenda = precoFinal * 0.8;
	printf("\n");
	
	
	printf("\nPreço final considerando imposto de renda: %.2lf.",impostoRenda);
	
	return 0;
}
