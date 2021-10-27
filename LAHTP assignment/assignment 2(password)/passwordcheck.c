#include<stdio.h>
#include<conio.h>
#define case "test_case.txt"
#include "password.c"
#include"passwordart.c"

int main(){
    int num,score;
    FILE *fp;
    char read[255];
    static int arrayindex=0;
    aciibanner();
    while(1){
    printf("\033[32m");
    puts("\n1.For enter a password");
    puts("2.For submit password file list");
    puts("999.For EXIT");
    printf("\033[0m");

    scanf("%d",&num);


    if (num==1){
        aciiwarning();
        puts("\n\033[31mEntre a password\033[0m");
        do{
            read[arrayindex]=getch();
            printf("\033[36m*\033[0m");
            arrayindex++;
        }while(read[arrayindex-1]!='\r');
        read[arrayindex-1]='\0';
        //printf("\nThe password strength is: %d\n",check_password(read));
        arrayindex=0;
        if(strlen(read)<8||strlen(read)>16)
         printf("\n\033[31mPassword input error..input password greatger than 8 or less than 16\033[0m\n");
        else aciiresult(check_password(read));

    }
    else if(num==2){
        fp=fopen(case,"r");
        if(fp==NULL){
            printf("\n file does't exit...");
        }else
            puts("\033[37mReading file..../\033[0m");
                while(fgets(read,255,fp)){
                    read[strlen(read)-1]=0;
                    aciiresult(check_password(read));
                    //printf("The password strength is: %d\n",check_password(read));
                }
    }
    else if(num==999){ 
        aciismiley();
        break;
    }
    else
        puts("invalid option...\n choose corectly");
    }
}