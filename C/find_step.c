#include <stdio.h>

int countStep(int num, int count)
{
    if(num == 0) return count;
    num = (num%2 == 0)? num/2 : num-1;
    // if(num % 2 == 0)
    // {
    //     count += 1;
    //     num /= 2;
    // }else{
    //     num -=1;
    //     count += 1;
    // }
    return countStep(num, count+1);
}
int findStep(int num)
{
    return countStep(num,0);
}
int findStep1(int num)
{
    
}
int main()
{
    printf("%d\n",findStep(14));
}