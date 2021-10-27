#include<stdio.h>
int main(){
	int i, j;
	char alphabets;
	puts("which alphabets line you want to finsh ?\n");
	scanf("%c",&alphabets);
	for(i='A';i<=alphabets;i++){
		for(j='A';j<=i;j++){
			printf("%c",i);
		}
		printf("\n");
	}
}
