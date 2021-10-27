#include<stdio.h>
int main(){
	int i, j, num;
	puts("how many line half pyramid you want?\n");
	scanf("%d",&num);
	for(i=0;i<=num;i++){
		for(j=0;j<i;j++){
			printf("*");
		}
		printf("\n");
	}
}
