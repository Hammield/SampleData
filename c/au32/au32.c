#include <stdlib.h>
#include <stdio.h>

int main(){
	
	int a,b,c;
	
	printf("Digite um valor para a variavel \"a\": ");
	scanf("%d",&a);
	
	printf("Digite um valor para a variavel \"b\": ");
	scanf("%d",&b);
	
	printf("Valores antes da troca:\n a:%d \n b:%d \n",a,b);
	c = a;
	a = b;
	b = c;

	printf("Valores depois da troca:\n a:%d \n b:%d \n",a,b);
	
	
	
	
	return 0;
}
