#include <iostream>
using namespace std;

void somar(float *var, float valor);
void iniVetor(float *v);

int main(){
	float num=0;
	float vetor[5];
	
	somar(&num,15);
	iniVetor(vetor);
	
	cout << num << "\n\n";
	
	for(int i =0;i<5;i++){
		cout << vetor[i] << "\n";
	}
	
	return 0;
}

void somar(float *var, float valor){
	*var +=valor;
}

void iniVetor(float *v){
	v[0]=4;
	v[1]=7;
	v[2]=4;
	v[3]=2;
	v[4]=9;
}
