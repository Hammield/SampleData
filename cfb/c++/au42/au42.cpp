#include <iostream>
#include <vector>
using namespace std;

int main(){
	
	vector<int> num;
	vector<int> num2;
	int tam1,tam2,i;
	
	num.push_back(10); num.push_back(2); num.push_back(7); num.push_back(4);
	
	num2.push_back(4); num2.push_back(2); num2.push_back(9); num2.push_back(3);

	//num.swap(num2);
	
	cout << "Primeiro valor do elemento: " << num.front() << endl;
	cout << "Ultimo valor do elemento: " << num2.back() << endl;
	
	num.insert(num.begin()+1,44);
	//num2.insert(num2.end(),27);
	//num2.erase(num2.end());
	
	tam1=num.size();
	tam2=num2.size();
	
	cout << "Valor aleatorio " << num.at(2) << endl;
	
	cout << "Tamanho do vetor: " << tam1 << endl;
	cout << endl;
	
	for (i=0;i<tam1;i++){
		cout << num[i] << endl;
	}
	
	cout << endl;
	
	for(i=0;i<tam2;i++){
		cout << num2[i] << endl;
	}
	
	while(!num2.empty()){
		num2.pop_back();
	}
	
	cout << "Tamanho final: " << num2.size() << endl;
	
	return 0;
}
