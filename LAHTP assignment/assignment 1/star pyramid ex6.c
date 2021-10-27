#include<stdio.h>
int main(){
	int num , i, j, space,k;
	printf("how many prymid line you want?\n");
	scanf("%d",&num);
	space=num-1;
	for(i=1;i<num*2;i+=2){
		for(k=space;k>0;k--){
			printf(" ");
		}
		space--;
		for(j=0;j<i;j++){
			printf("*");
		}
		printf("\n");
	}
}
