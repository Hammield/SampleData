#include <iostream>
using namespace std;

int main(){
	//Para se utilizar uma variável, deve se específicar o TIPO e o NOME dessa variável;
	//Também pode se utilizar um valor padrão pelo sinal de atribuição =;
	int vidas=3; //Números inteiros
	char letra='a'; /*char recebe apenas um caractere(letra) ex: 'A' 'c' detalhe: use sempre aspas simples*/
	double decimal=8.9; //O mesmo que float //2.4999999999
	float decimal2=5.4; //Precisão menor que o double // 2.5
	bool vivo=true; //true ou false
	string nome="Cleverson"; //Diferentemente do char, string usa aspas duplas e permite mais de um caractere
	
	cout << "Digite o numero de vidas: "; //out = saida "<<", exibe o que estiver escrito
	cin >> vidas;//in = entrada ">>", exibe o que FOR escrito pelo usuário
	
	cout <<"Digite uma letra: ";
	cin >> letra;
	
	cout <<"Quanto dinheiro: ";
	cin >> decimal;
	
	cout <<"Diga o seu nome: ";
	cin >> nome;
	
	cout << "\n";
	cout <<"Vidas disponiveis: " << vidas << "\n";
	cout <<"Letra escolhida: " << letra << "\n";
	cout <<"Dinheiro: " << decimal << "\n";
	cout << vivo << "\n";
	cout <<"Nome do personagem: " <<nome << "\n";
	
	system("pause"); //Pausa, caso não use o executavel se encerrará automaticamente ao fim do programa
	
	return 0;
}
