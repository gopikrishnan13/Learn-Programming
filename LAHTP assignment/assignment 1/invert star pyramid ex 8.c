#include<stdio.h>
int main(){
	int num , i, j, space,k;
	printf("how many prymid line you want?\n");
	scanf("%d",&num);
	if(num%2==0)
		num+=1;
	else
	num=num;
	space=1;
	for(i=num;i>=1;i-=2){
		for(j=0;j<i;j++){
			printf("*");
		}
		printf("\n");
		for(k=0;k<space;k++){
			printf(" ");
		}
		space++;
	}
}
