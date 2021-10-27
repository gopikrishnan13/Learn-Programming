//reallock not working only syntax is here da gopi
#include<stdlib.h>
#include<stdio.h>
int *multi(int,int,int,int);
int main(){
    int *ptr;
    int num,len;
    puts("Entre a number:\nEntre a lenght of table:");
    scanf("%d %d",&num,&len);
    ptr=multi(num,len,0,0);
    for(int i=1;i<=len;i++){
    printf("%d X %d = %d\n",i,num,*(ptr+i));
    }
    puts("IF YOU WANT ADD MORE TABLE?\n 1.yes\n2.no");
    int c;
    scanf("%d",&c);
    if(c==1){
        int a;
        puts("Entre  how many number you want to add:");
        scanf("%d",&a);
        ptr=multi(num,len,1,a);
            for(int i=1;i<=len;i++){
                printf("%d X %d = %d\n",i,num,*(ptr+i));
            }
    }else return 0;
}
int *multi(int num,int len,int flag,int en){
    //static int table[len];
    static int *tptr;
    if(flag!=1){
    tptr=(int *)calloc(len,sizeof(int));
    if(tptr==NULL){
        puts("error");
        exit(1);
    }
    for(int i=1;i<=10;i++){
        tptr[i]=i*num;
    }
    return tptr;
    }else{
        static int *rptr;
        tptr=(int *)realloc(tptr,en);
        if(tptr==NULL){
        puts("error");
        exit(1);
    }
    for(int i=1;i<=10;i++){
        tptr[i]=i*num;
    }
    return tptr;

    }
}