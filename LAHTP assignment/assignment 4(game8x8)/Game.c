#include<stdio.h>

int build[8][8];
// function block
void map();
void land();
void xaxis(int value);
void yaxis(int value);
void finddif();

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
puts("2.Land the choper");
puts("3.Find other values");
puts("0.exit");
int n;
scanf("%d",&n);
if(n==0)
break;
else
switch(n){
	case 1: map();
	break;
	case 2:land();
	break;
	case 3:finddif();
	break;
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
	
	int n=3, x, y;
	int pos1[100];
	int pos2[100];
	static int j=0;
	
		//puts("How many chopper you want to land? !!only 100 chopper in your hand");
		//scanf("%d",&n);
		
	//printf("you entre the %p",&n);
	if(n<101){
		//puts("!!WARNING YOU HAVE ONLY 100 CHOPPERS\n");
		for(int i=1;i<=n;i++){
			if(i==1)
				printf("Mind it your building size is buliding[%d][%d]\n\n",8,8);
			else
				printf("where you %d chopper land them? !! put a input x,y axis type\n",i);
				scanf("%d %d" ,&x, &y);
					if(x>8 || y>8){
						puts("!!!INVALID INPUT!!!");
						printf("mind it you building size is buliding[%d][%d]\n\n",8,8);
						land();
						}
					else{
						pos1[i]=x;
						pos2[i]=y;
						j+=1;
					}
		}
	}

		/*for(int i=1;i<=j;i++){
			xaxis(pos1[i]); 
			yaxis(pos2[i]);
			printf("chopper %d land sucessfully at building[%d][%d]\n",i,pos1[i],pos2[i]);
			//puts("SOMETHING ERROR!!!");
		}*/
	printf("\n");
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

void finddif(){
	//printf("adress of 7,8%p\n",&build[7][8]);
	for(int i=1;i<=8;i++){
		for(int j=1;j<=8;j++){
			if(build[i][j]!=1||0)
				printf("bulid[%d][%d]=%d\n",i,j,build[i][j]);
				else
				printf("hi\n");
			}
	}
}
