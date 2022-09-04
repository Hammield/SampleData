#include <iostream>
#include <cstdlib>
using namespace std;

int main(){
	
	double n1,n2,media;
	char opc;
	n1 = 1;
	n2 = 1;
	
	inicio:
		
	system("cls");	//precisa da biblioteca cstdlib
	
	cout << "Insira a primeira nota: ";
	cin >> n1;
	
	cout << "Insira a segunda nota: ";
	cin >> n2;
	
	media = (n1+n2)/2;
	
	if (media >= 5){
		cout << "Aprovado com media de "<< media;
	} else if (media >=3) {
		cout << "Estado de recuperacao com " << media;
	} else {
		cout << "Reprovado com media de " << media;
	}
	
	cout << "\nDigitar outras notas? [s/n]: ";
	cin >> opc;
	
	if(opc == 's' or opc=='S'){
		goto inicio;
	}
	
	system("pause");
	
	return 0;
}
