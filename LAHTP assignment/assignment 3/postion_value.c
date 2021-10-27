#include<stdio.h>
#include<math.h>
int main(){
    int count, num;
    static int i=0;
    puts("Entre a number");
    scanf("%d",&num);
    count=log10(num)+1;
    if(count>10||count<0){
        puts("invalid number");
    }else{
         while(num!=0){
         printf("The %.0f's postion is %li\n",pow(10,i),num%10);
         ///printf("%d",count);
         num=num/10;
         i++;
        }
    }
    return 0;
}