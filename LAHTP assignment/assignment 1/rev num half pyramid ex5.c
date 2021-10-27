#include<stdio.h>
int main(){
	int i,j,num;
	printf("how many line off prymid you want?");
	scanf("%d",&num);
	for(i=num;i>0;i--){
		for(j=0;j<i;j++){
			printf("%d",j+1);
		}
		printf("\n");
	}
}
