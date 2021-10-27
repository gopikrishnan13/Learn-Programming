#include<stdio.h>
int main(){
    int n,count=0,max=0;
    scanf("%d",&n);
    
    while(n){
        if(n&1)
            count++;
        else
            count=0;
        if(max<count)
            max=count;
        n=n>>1;
    }
        printf("%d",max);
    return 0;
//gopikrishnan check git 
}
