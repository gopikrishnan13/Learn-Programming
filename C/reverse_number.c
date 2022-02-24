#include<stdio.h>
//solve via recursion with global vairable
int rev = 0; // reverser number
int reverse_number(int num)
{
    if(num == 0) return 0;
    rev = (rev*10) + num %10;
    reverse_number(num/10);
}

//solve via recursion with argument 
int reverse_number_2(int num, int res)
{
    if(num == 0) return res;
    return reverse_number_2(num/10, (res * 10) + num % 10);
}

//solve via while loop
int reverse_number_3(int num)
{
    int rev = 0;
    while(num != 0)
    {
        rev = (rev*10) + (num%10);
        num /= 10;
    }

    return rev;
}

int main()
{
    reverse_number(123);
    printf("Reversed number is : %d via function 1\n",rev);
    printf("Reversed number is : %d via function 2\n", reverse_number_2(123,0));
    printf("Reversed number is : %d via function 3\n", reverse_number_3(123));

    return 0;
}