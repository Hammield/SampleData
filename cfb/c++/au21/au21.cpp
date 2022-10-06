#include <iostream>
#include <string.h>
#include <stdlib.h>
using namespace std;

int main(int argc, char *argv[]){
	int num;
	/*
	cout << argv[1] << "\n";
	cout << argc << "\n";
	*/
	
	if(argc > 1){
		if(!strcmp(argv[1],"sol")){
			cout << "Vou ao clube. \n\n";
			cout << "Digite um numero: ";
			cin >> num;
			cout << "Numero igual a " << num;
		}else if(!strcmp(argv[1],"nublado")){
			cout << "Vou ao cinema.\n\n";
		}else{
			cout << "Vou ficar em casa.\n\n";
		}	
	}
	
	cout << "\n";
	
	system("pause");
	
	return 0;
}
