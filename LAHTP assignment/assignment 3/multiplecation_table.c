#include<stdio.h>
void multipulation(int ,int);
int main(){
    int num=0,len=15,y;
    puts("Entre a what table you want?");
    scanf("%d",&num);
    puts("do you want to change a lenght of table? [default=15];\n1.YES\n2.NO");
    scanf("%d",&y);
    y==1?scanf("%d",&len):len;
    num>0?multipulation(num,len):puts("invalid number");
    return 0;
}
void multipulation(int num, int len){
    for(int i=1;i<=len;i++){
        printf("%d X %d = %d\n",i,num,i*num);
    }
    puts(" ");
}
