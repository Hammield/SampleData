#include <stdio.h>
#include <stdlib.h>

int main(){
	int v1,v2,res;
	
	/*v1 = 8;
	v2 = 5;
	res = v1*v2;*/
	
	printf("Digite um valor: \n");
	scanf("%d",&v1);
	
	printf("Digite outro valor: \n");
	scanf("%d",&v2);
	
	res = v1*v2;
	
	printf("\n%d x %d = %d\n\n",v1,v2,res);
	
	return 0;
}
