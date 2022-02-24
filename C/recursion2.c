#include <stdio.h>

int printStraight(int n)
{
    if(n == 0) return 0;
    printf("%d\n",n);
    printStraight(n-1);
}

int printReverse(int n)
{
    if(n == 0) return 0;
    printReverse(n-1);
    printf("%d\n",n);
}

int printBoth(int n)
{
    if(n == 0) return 0;
    printf("%d\n",n);
    printBoth(n-1);
    printf("%d\n",n);
}

void main()
{
    printBoth(5);
}