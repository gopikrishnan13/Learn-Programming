#include<stdio.h>
#include<stdlib.h>
int main(){
    int *ptr;
    ptr=(int *)malloc(3*sizeof(int));
    if(ptr==NULL){
        puts("error");
        exit(1);
    }
    //printf("%d",sizeof(ptr));
    for(int i=0;i<sizeof(ptr);i++){
        printf("%d\n",(ptr+(4*i)));
    }
    ptr=(int *)realloc(ptr,7);
    if(ptr==NULL){
        puts("error1");
        exit(1);
    }
    for(int i=0;i<10;i++){
         printf("%d\n",(ptr+(4*i)));
    }
    free(ptr);
    ptr=NULL;
    return 0;
}