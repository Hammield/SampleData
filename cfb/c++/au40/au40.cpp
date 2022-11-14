#include <iostream>
#include <stdio.h>
#include <stdlib.h>
using namespace std;

int main(){
	int v1,v2,res;
	printf("Digite um valor: ");
	scanf("%d",&v1);
	
	printf("Digite outro valor: ");
	scanf("%d",&v2);
	
	res=v1*v2;
	
	printf("%d x %d = %d",v1,v2,res);
	
	return 0;
}
