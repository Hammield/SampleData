#include <stdlib.h>
#include <stdio.h>

int main(){
	char sexo;
	int idade;
	float peso,altura;
	
	printf("Digite o seu sexo: [M/F]");
	scanf("%c",&sexo);
	
	printf("Digite sua idade: ");
	scanf("%d",&idade);
	
	printf("Qual o seu peso? ");
	scanf("%f",&peso);
	
	printf("Por fim, digite sua altura: ");
	scanf("%f",&altura);
	
	printf("Dados: \n sexo: %c \n idade: %d \n peso: %.2f \n altura: %.2f\n\n",sexo,idade,peso,altura);
	
	return 0;
}
