// #include<stdio.h>
// #include<string.h>
// #include<stdlib.h>

// struct  playerDetail
// {
//     char name[100];
//     float age,numberOfMatches,totalRun,averageRuns;
// };
// char* enterDetail()
// {
//     struct playerDetail playerArr[20];
//     for(int i=0; i<20; i++){
//         playerArr[i].name = "a";
//         playerArr[i].age=rand();
//         playerArr[i].numberOfMatches=rand();
//         playerArr[i].totalRun=rand();
//         playerArr[i].averageRuns=playerArr[i].totalRun/playerArr[i].numberOfMatches;
//     }

// }
// int main()
// {

// }


#include<stdio.h>
struct cricketer
{
    int runs,age,numOfMatch;
    char name[100];
}player[100];
 
void main()
{
    int i,n=2;
    printf("Enter player info as name , age , number of matches , total run\n");
    for(i=0;i<n;i++)
    {
        scanf("%s %d %d %d",player[i].name,&player[i].age,&player[i].numOfMatch,&player[i].runs);
    }
    printf("\nNAME\t\tAGE\t\tMATCHES PLAYED\t\tTOTAL RUNS\t\tAVERAGE SCORE\n");
    for(i=0;i<n;i++)
    {
        printf("%s\t\t%d\t\t\t%d\t\t\t%d\t\t\t%d\n",player[i].name,player[i].age,player[i].numOfMatch,player[i].runs,player[i].runs/player[i].numOfMatch);
    }
}