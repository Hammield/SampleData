#include <iostream>
#include <stdio.h>
#include <stdlib.h>
using namespace std;

int main(){
	
	int teste = 800;
	
	printf("Valor final: %07d \n",teste);
	cout << "Valor final em hexadecimal: " << hex << teste << "\n";
	
	printf("press any key...\n\n");
	getchar();
	
	return 0;
}
