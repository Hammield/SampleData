#include <iostream>
using namespace std;

int main(){
	
	int matriz[3][4] = {{5,2,9,1},{4,3,3,8},{1,0,2,5}};
	int l,c;
		
	/*for(l=0;l<3;l++){
		for(c=0;c<4;c++){
			cin >> matriz[l][c];
		}
	}*/
	

	
	for(l=0;l<3;l++){
		for(c=0;c<4;c++){
			cout << matriz[l][c] << " ";
		}
		cout << "\n";
	}
	
	return 0;
}