#include<stdio.h>
int main(){
	int i , n , j ;
	printf("how many star you want\n");
	scanf("%d",&n);
	for(i=n;i>0;i--){
		for(j=0;j<i;j++){
			printf("*");
		}
		printf("\n");
	}
}
