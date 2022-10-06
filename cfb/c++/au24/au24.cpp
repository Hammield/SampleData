#include <iostream>
using namespace std;

void mult(int n1=5,int n2=5);

int main(){
	
	mult();
	
	return 0;
}

void mult(int n1, int n2){
	cout << n1 << " x " << n2 << " = " << n1*n2 << "\n";
	
}
