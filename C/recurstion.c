#include <stdio.h>

long fibonacci(int);

int main()
{
    puts("prgm started...\n");
    printf("Result : %ld\n",fibonacci(100));

    return 0;

}

long fibonacci(int num)
{
    if(2 > num )
        return num;

    return fibonacci(num - 1) + fibonacci(num -2);
}
