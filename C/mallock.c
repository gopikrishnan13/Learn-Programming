//mallock using
//mallock return type is: void* mallock(size_t size);
#include<stdio.h>
#include<stdlib.h>
int main(){
    int num=0;
    printf("Entre the limit value:");
    scanf("%d",&num);
    int *ptr;
    ptr=(int *)malloc(num*sizeof(int));
    if(ptr==NULL){
        puts("The memory block not avaible");
        exit(1);
    }
     for (int i=0; i<num; i++){
        ptr[i]=i;
    }
    for (int i=0; i<num; i++){
        printf("%d ",*ptr+i);
    }
    free(ptr);
    ptr=NULL;
    return 0;
    
}