#include<stdio.h>

int sum_of_digit(int num)
{
    //if(num < 1) return 0;
    //return num%10 + sum_of_digit(num/10);
    return (num < 1) ? 0 : num%10 + sum_of_digit(num/10);
}

int product_of_digit(int num)
{
    //if(num < 1) return 0;
    //return num%10 + sum_of_digit(num/10);
    return (num%10 == num) ? num : num%10 * product_of_digit(num/10);
}

int sum_of_digit_2(int num)
{
    int total = 0;
    while(num > 0)
    {
        total += num%10;
        num /= 10;
    }
    return total;
}

int main()
{
    printf("sum of digit is : %d\n",sum_of_digit(202));
}