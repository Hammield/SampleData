#include <iostream>
using namespace std;

void texto();
void soma(int n1, int n2);
int mult(int v1, int v2);
void tr (string tra[4]);

int main(){
	int res;
	res=mult(8,8);
	string transp[4]={"bicicleta","carro","navio","moto"};
	
	tr(transp);

	cout << "\n";
	
	soma(5,9);
	
	cout << mult(8,5);
	
	return 0;
}

void texto(){
	cout << "\nCleverson Teguinha da Silva\n";
}

void soma(int n1, int n2){
	 cout << "soma: " << n1+n2 << "\n";
}

int mult(int v1, int v2){	
	return v1*v2;
}

void tr(string tra[4]){
	for(int i=0;i<4;i++){
		cout << tra[i] << "\n";
	}
}
