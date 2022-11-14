#include <stdlib.h>
#include <stdio.h>

int main(){
	char letra;
	printf("Digite uma letra: ");
	letra = fgetc(stdin);
	
	printf("Letra digitada: %c",letra);
	
	
	return 0;
}
