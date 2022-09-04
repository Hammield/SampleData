#include <iostream>
using namespace std;

int main(){
	
	//(expressão) ? valor1 : valor2
	
	int n1,n2,nota;
	string res;
	
	cout << "Digite a primeira nota: ";
	cin >> n1;
	cout << "Digite a segunda nota: ";
	cin >> n2;
	
	nota=n1+n2;
	
	//(nota >=60) ? res="Aprovado" : res="Reprovado";
	res=(nota >= 60) ? "Aprovado" : "Reprovado"; /*Use a mesma declaração de retorno do tipo que usou
	exemplo, use uma string caso tenha declarado a variável como string: string res*/
	
	cout << "\nSituacao do aluno: " << res << "\n";
	
	return 0;
}
