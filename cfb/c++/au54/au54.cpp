#include <iostream>
#include <stdexcept>
using namespace std;

double divide(double n1,double n2);

int main(){
	
	try{
		cout << divide(90,0);
	}catch(const char* e){
		cout << e.what();
	}
	
	return 0;
}

double divide(double n1, double n2){
	if(n2 == 0){
		throw "Erro de divisao por 0";
	}
	return n1 / n2;
}
