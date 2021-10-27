#include<stdlib.h>
#include<stdio.h>
int *multi(int,int);
int main(){
    int *ptr;
    int num,len;
    puts("Entre a number:\nEntre a lenght of table:");
    scanf("%d %d",&num,&len);
    ptr=multi(num,len);
    for(int i=1;i<=len;i++){
    printf("%d X %d = %d\n",i,num,*(ptr+i));
    }
    free(ptr);
    ptr=NULL;
    return 0;
}
int *multi(int num,int len){
    //static int table[len];
    int *tptr;
    tptr=(int *)calloc(len,sizeof(int));
    if(tptr==NULL){
        puts("error");
        exit(1);
    }
    for(int i=1;i<=10;i++){
        tptr[i]=i*num;
    }
    return tptr;
}