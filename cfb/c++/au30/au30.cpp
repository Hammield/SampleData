#include <iostream>
#include <queue>
using namespace std;

int main(){
	
	/*
	empty
	size
	front
	back
	pop
	push
	
	*/
	
	queue <string> cartas;
	
	cartas.push("aaaaaaaa");
	cartas.push("eeeeeeee");
	cartas.push("iiiiiiii");
	cartas.push("dddddddd");
	
	cout << cartas.back();
	
	cout << "\n";
	
	
	return 0;
}
