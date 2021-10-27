#include<stdio.h>
#include<string.h>
#include<ctype.h>
#include<stdlib.h>
int check_password(char *password){
    int score=0;
    int temp=0;
    //checking a password have a 8 charters
    if (strlen(password)>7){
        score+=2;
    }else score+=0;

    //checking a password have a 3 alphapet
    for (int i=0; i<strlen(password); i++){
        temp+=islower(password[i])?1:0;
    }score+=temp>2?1:0;
        //printf("\n--[%s]--\n",temp);
    temp=0;
    //checking a password have a one captial letter
    for(int i=0;i<strlen(password);i++){
        temp+=isupper(password[i])?1:0;
    }score+=temp>0?1:0;
    temp=0;

    //checking a password have a one symbole
    for(int i=0;i<strlen(password);i++){
        temp+=ispunct(password[i])?1:0;
    }score+=temp>0?1:0;
    temp=0;

    //checking a password have three number and save the value to check to seq number
    char checkseq[100];
    static int arrayindex=0;
    int sub;
    for(int i=0;i<strlen(password);i++){
        if(isdigit(password[i])){
            temp+=1;
            checkseq[arrayindex]=password[i];
            arrayindex++;
        }temp+=0;
    }score+=temp>2?1:0;
    temp=0;
    //checking a password have a sequvance
    for(int i=0;i<strlen(checkseq)-1;i++){
        sub=checkseq[i]-checkseq[i+1];
        temp+=sub==1||sub==-1?1:0;
    }score+=temp>0?0:1;
    temp=0;
    arrayindex=0;
    //finesh :)

    return score==7?8:score;
}