#include <iostream>
using namespace std;

int main(){
	int *p,*p2,*p3;
	int vetor [10];
	
	p=&vetor[0]; //p=vetor;
	p2=&vetor[1];
	p3=&vetor[2];
	
	cout << p << "\n";
	*p = 10;
	cout << vetor[0] << "\n";
	
	cout << p2 << "\n";
	*p2 = 23;
	cout << vetor[1] << "\n";
	
	cout << p3 << "\n";
	*p3 = 15;
	cout << vetor[2] << "\n";
	
	
	return 0;
}
