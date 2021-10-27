#include<stdio.h>
#include<string.h>
#include<ctype.h>
#include<string.h>
#include<stdlib.h>
#include<math.h>
#include<conio.h>
#define MAX_LEN 128

int aciibanner(void){
    FILE* fp;
    char read;
    fp=fopen("banner.txt","r");
    //fputc('g',fp);
    while((read=fgetc(fp))!=EOF){
        printf("\033[36m%c\033[0m",read);
    }
    fclose(fp);
    return 0;
}
int aciismiley(void){
    FILE* fp;
    char read;
    fp=fopen("smiley.txt","r");
    //fputc('g',fp);
    while((read=fgetc(fp))!=EOF){
        printf("\033[33m%c\033[0m",read);
    }
    fclose(fp);
    return 0;
}

int aciiresult(int score){
    FILE* fp;
    char read;
    fp=fopen("result.txt","r");
    //fputc('g',fp);
    while((read=fgetc(fp))!=EOF){
        if(read=='x'){
            printf("\033[4m\033[32m%d\033\033[0m",score);
        }else
        printf("\033[33m%c\033[0m",read);
    }
    fclose(fp);
    return 0;
}

int aciiwarning(void){
    FILE* fp;
    char read;
    fp=fopen("warning.txt","r");
    //fputc('g',fp);
    while((read=fgetc(fp))!=EOF){
        printf("\033[91m%c\033[0m",read);
    }
    fclose(fp);
    return 0;
}

