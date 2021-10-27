#include<stdio.h>
#include<math.h>
int main(){
    int num,rev=0;
    puts("Entre number to reverse:");
    scanf("%d",&num);
    while(num!=0){
    rev=(rev*10)+(num%10);
    num/=10;
    }
    printf("%d",rev);
    return 0;
}