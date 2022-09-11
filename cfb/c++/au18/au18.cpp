#include <iostream>
using namespace std;

int main(){

	int tam=7;
	int vetor[7]={10,4,25,8,12,9,2};
	int i;

	//sizeof conta os bites, int possui 4 bites cada
	//divida por 4 caso queira inserir no for

	for(i=0;i<sizeof(vetor)/4;i++){
		cout << vetor[i] << "\n";
	}

	return 0;
}
