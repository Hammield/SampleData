#include <iostream>
using namespace std;

int main(){
	int n1,n2,n3,n4,num;
	n1 = 4;
	n2 = 7;// ! = NOT = NÃO //usa em valores booleanos
	n3 = 3;// && = AND = E
	n4 = 2; //|| = OR =  OU
	
	if (n1 > n2 || n3 > n4){
		cout << "Tudo certo!\n";
	} else {
		cout <<"Espere um momento.\n";
	}
	
	num=1;
	if(!num){
		cout <<"\n\nIsso e verdadeiro";
	} else {
		cout <<"\n\nIsso e falso";
	}
	
	return 0;
}
