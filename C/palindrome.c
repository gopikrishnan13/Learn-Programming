#include <stdio.h>

int isPalindrome(int num, int rev, int temp)
{
    if(num == 0) return (temp == rev) ? 1 : 0;
    return isPalindrome(num/10, rev*10 + num%10,temp);
}
int isPalindrome2(int num)
{
    int rev = 0, temp = num;
    while(num != 0)
    {
        rev = rev*10 + num%10;
        num /= 10;
    }
    return (temp == rev) ? 1 : 0;
}
int main()
{
    printf("\nGiven number is %s\n",isPalindrome(67,0,67)?"PALINDROME":"NOT PALIDROME");
    printf("\nGiven number is %s\n",isPalindrome2(545)?"PALINDROME":"NOT PALIDROME");
}