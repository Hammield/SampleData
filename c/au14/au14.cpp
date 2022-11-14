#include <stdlib.h>
#include <stdio.h>

int main(){

	char a,b;

	printf("Digite uma letra: ");
	scanf("%c", &a);

	scanf("%c");

	printf("Digite outra letra: ");
	scanf("%c", &b);

	printf("Letras digitadas: \n%c\n%c",a,b);

	printf("Fim");

	return 0;
}
