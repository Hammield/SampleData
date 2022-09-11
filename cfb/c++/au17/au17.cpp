#include <iostream>
using namespace std;

int main(){
	/*int i = 1;
	int val = 8;
	
	for(i;i<=10;i++){
		cout << "\n" << val << "x" << i << "=" << val*i << "\n";
	}*/
	
	int x,y,z;
	
	//for(int tmp=0; tmp < 10000000 ;tmp++); For sem bloco,serve de temporizador
	
	
	for(x=0,y=1, z=0 ;x<=10 && z <= 6 ; x++,y+=2,z+=2){
		cout << x << "-" << y << "-" << z << "\n";
	}
	
	return 0;
}
