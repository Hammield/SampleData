#include <stdio.h>
#include <stdlib.h>

int main(){
	
	char letra;
	
	printf("Digite uma letra: ");
	letra = getc(stdin);
	
	printf("Letra digitada: %c",letra);
	
	return 0;
}
