#include<stdio.h>
#include<string.h>
#include<ctype.h>
int main(){
    int b[100], c;
    puts("How many number you want to enter?");
    scanf("%d",&c);
    for (int i=0; i<c; i++){
        scanf("%d",&b[i]);
    }
    //int a[100]={432,242,232,242};
    //printf("%d",sizeof(b)/4);
    int i=c-1;
    while (i>=0){
        printf("%d,",b[i]);
        i--;
    }
    //  (int i=c; i!=c; i--){
    //     if(b[i]==0){
    //     }else
    //     printf("%d,",b[i]);   
    // }
}