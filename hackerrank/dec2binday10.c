/*
***THIS IS HACKERRANK TASK COMPLATION CODE --> DOWN LA  IRUKKARADHU DECMIAL LA IRUDHU BINNARY KU CONVERT PANDARA CODE AGUM.../
#include<stdio.h>
int main(){
    int n,count=0,max=0;//create a variable, count=check how many constivative 1 is coming;max=check highest constiative 1;e 
    scanf("%d",&n);//scan a value of n;example n=2
    
    while(n){
        if(n&1)//check n binnary and 1 binnary via and(&) gate;example:1=00000001 & 2=00000010 answer=00000000;so if condtion throw false;
            count++;//incase this if is true upadate count;
        else
            count=0;
        if(max<count)//check max lessthan count;
            max=count;//if true update max value; 
        n=n>>1;//upadte n value using right swift operatore :example n=00000010>>1, n=00000001,n=1;
    }
        printf("%d",max);
    return 0;
}

*/

/*
THE PROGARMA TO CONVERT THE DECMIAL VALUE TO BINNARY VALUE
*/
#include<stdio.h>
#define MAX 255
int main(){
     int n;
     puts("Entre the value of n=");
     scanf("%d",&n);//scan value of n.
     static int count=0;//create a static variable to store divison reminder in array
     int remider[MAX];
     while (n!=1){
         //printf("set the value of remider[%d]= %d\n",count,n%2);
         remider[count]=n%2;//set remider value
         count+=1;//increment count value
         n=n/2;//dectement loop condtion
     }
     //count+=1;
    //printf("set the value of remider[%d]= %d\n",count,n);
     remider[count]=n;//set last digt balue of array
     for (int i=count; i>=0; i--){//to print the array via for loop
         printf("%d",remider[i]);
         //printf("The value of remider[%d]= %d\n",i,remider[i]);
     }
}