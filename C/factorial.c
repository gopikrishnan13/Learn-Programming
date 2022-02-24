#include <stdio.h>

int factorial(int num)
{
    //if(num == 1) return 1;
    //return num*factorial(num-1);
    return (num > -1 && num < 2) ? 1 : num*factorial(num-1);
}


int main()
{
    printf("%d",factorial(4));
}