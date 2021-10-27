#include<stdio.h>

int build[8][8];
// function block
void map();
void land();
void xaxis(int value);
void yaxis(int value);
void set();
void recuse();

int main(){
	//printf("hi from main\n");
{//set build value
	for(int i=1;i<=8;i++){
		for(int j=1;j<=8;j++){
			build[i][j]=0;
			}
	}
}
while(1){
puts("1.See the blueprint of buliding");
puts("2.Land the chopper");
puts("777.Reset");
puts("0.exit");
int n;
scanf("%d",&n);
if(n==0)
break;
else;
switch(n){
	case 1: map();
	break;
	case 2:land(),recuse();
	break;
	case 777:set();
	break;
	default:puts("INVALID OPTION\n");
}
}
	return 0;
	
}

void map(){
	//printf("hi from map");
	for(int i=1;i<=8;i++){
		for(int j=1;j<=8;j++){
			printf("%d   ",build[i][j]);
		}
		printf("\n\n");
	}
}

void land(){
	int num;
	int x[8];
	int y[8];
	
	puts("How many chopper you want land?!!NOTE:You have only 100 choppers;\n");
	scanf("%d",&num);
	
	if(num>0&&num<101){
		puts("NOTE: Your building size is 8X8. If any doubt go back and see the blueprint\n");
		for(int i=1;i<=num;i++){
			printf("Where you land %d chopper? !!NOTE: Input x,y axis; ex:{3 4}\n",i);
			scanf("%d  %d",&y[i],&x[i]);
				if(x[i]>0&&x[i]<9 || y[i]>0&&y[i]<9){
						xaxis(x[i]);
						yaxis(y[i]);
						
				}else{
					puts("!!WARNING!! NOTE: Your build size is 8X8\n ");
					land();
				}
		}
	}else{
			puts("!!WARNING!! NOTE:You have only 100 choppers;\n");
			land();
	}
		puts("If you want to see where choppers landed?\n1.Yes\n2.No\n");
							int ans;
							scanf("%d",&ans);
							if(ans==1){
								printf("You landed %d chopper at:\n",num);
								for(int j=1;j<=num;j++){
								printf("%d. chopper land in building[%d][%d].\n\n",j,y[j],x[j]);
							}
							}else;
}

void xaxis(int value){
	for (int i=1;i<=8;i++){
		build[value][i]=1;
	}
}
void yaxis(int value){
	for (int i=1;i<=8;i++){
		build[i][value]=1;
	}
}
void set(){//set build value
	for(int i=1;i<=8;i++){
		for(int j=1;j<=8;j++){
			build[i][j]=0;
			}
	}
	puts("RESETED MAP SUCESSFULLY...\n");
}
void recuse(){
	static int count=0;
	for(int i=1;i<=8;i++){
		for(int j=1;j<=8;j++){
			if(build[i][j]==1){
				count+=1;
			}else;
			}
	}
	if(count>0&&count<64)
	printf("YOU SUCESSFULLY RECUSE %d PEOPLE...\n\n",count);
	else if(count==64)
	puts("AWW! YOUR ARE GREAT... YOU RECUSE 64 PEOPLE...!\n");
	else
	puts("OHH! SHUT NO PEOPLE YOU RECUSE...\n");
}
