#include <stdio.h>

int countZero(int num, int count)
{
    if(num == 0) return count;
    count += (num%10 == 0) ? 1 : 0;
    return countZero(num/10, count);
}
int countZero2(int num)
{
    int count = 0;
    while(num != 0)
    {
        count += (num%10 == 0) ? 1 : 0;
        num /= 10;
    }
    return count;
}
int main()
{
    printf("\nNo of Zero's in give number is : %d via function 1\n",countZero(30204,0));
    printf("\nNo of Zero's in give number is : %d via function 2\n",countZero2(30204));
}