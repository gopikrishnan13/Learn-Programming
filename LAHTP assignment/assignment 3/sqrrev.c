#include<stdio.h>
#include<math.h>
#include<conio.h>

int revnum(int);
void checkrsrn(int,int,int);
int startnum,revstnum;
int main(){
    int c,endnum,sqr,revsqr;
    while(1){
    puts("1.Entre a individual number:\n2.Entre a range of a number:\n999.Exiting...");
    scanf("%d",&c);
    if(c==1){
        puts("Entre a number:");
        scanf("%d",&startnum);
        sqr=startnum*startnum;
        revstnum=revnum(startnum);
        revsqr=revstnum*revstnum;
        checkrsrn(sqr,revsqr,1);
    }else if(c==2){
        puts("Entre a starting number:");
        scanf("%d",&startnum);
        puts("Entre a ending number:");
        scanf("%d",&endnum);
        int n=0;
        puts("if you want to print a ""NOT RSRN VALUE""?\n1.YES\n2.OTHERWISE NOT PRINT");
        scanf("%d",&n);
        for(startnum;startnum<=endnum;startnum++){
            sqr=startnum*startnum;
            revstnum=revnum(startnum);
            revsqr=revstnum*revstnum;
            checkrsrn(sqr,revsqr,n);
        }
    }else if(c==999){
        puts("THANKS FOR USING :)");
        break;
    }else{
        puts("INVALID OPTIONS");
    }   
}
    return 0;
}

int revnum(int num){
    int rev=0;
    while(num!=0){
        rev=(rev*10)+(num%10);
        num/=10;
    }
    return rev;
}
void checkrsrn(int num, int num2,int n){
    if(num == revnum(num2)){
        printf("\033[32m%d & reverse of %d is (%d) as 'RSRN'.\033[0m\n",startnum,startnum,revstnum);
    }else{
        if(n==1){
        printf("\033[91m%d & reverse of %d is (%d)  'NOT RSRN!\033[0m\n",startnum,startnum,revstnum);
        }else;
    }   

}